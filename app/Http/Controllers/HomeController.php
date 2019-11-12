<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;      
use App\User;
class HomeController extends Controller
{
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function register()
    {
        return view('auth.register2');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



#---------------------------------------------------------------------
# ajax register
#----------------------------------------------------------------------


public function userRegister(Request $request)
{
        $v= \Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'password' => ['required','min:6','confirmed']
        ]);

        if($v->fails()){
             return response()->json(['status' => 0,'errors' => $v->errors()]);
        }else{

            $role = !empty($request->type) ? 'vendor' : 'user';
          
            $status = $this->saveNewUser($request,$role);

            return response()->json(['status' => 1,'message' => 'We sent you an activation code. Check your Email and click on the link to verify.']);

        }
}






#-----------------------------------------------------------------------
#  save new user
#-----------------------------------------------------------------------


public function saveNewUser($request,$role="user")
{
    
            $user = \App\User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'name' => $request->first_name.' '.$request->last_name,
                'email' => $request->email,
                'role' => $role,
                'password' => \Hash::make($request->password),
            ]);

 
           $user->sendEmailVerificationNotification();
           return 1;
}





#-----------------------------------------------------------------------
#  save new user
#-----------------------------------------------------------------------


public function userLogin(Request $request,$role="user")
{
       $v= \Validator::make($request->all(), [
           
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
            
        ]);

        if($v->fails()){
             return response()->json(['status' => 0,'errors' => $v->errors()]);
        }else{

            $role = $this->login($request);
            return response()->json($role);

        }
}



public function login($request)
{
    $arr =[];
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role' => 'vendor']))
        {

           // return Auth::user();
            if(Auth::check() && Auth::user()->email_verified_at){
                
                $arr = [
                    'status' => 1,
                    'message' => 'Please wait... Redirecting to your dashboard.',
                    'redirectLink' => url(route('vendor_dashboard'))
                ];

            
            }else{
              Auth::logout();
             

                  $arr = [
                    'status' => 2,
                    'message' => 'Your account is not verified yet.',
                    'redirectLink' => url(route('vendor_dashboard'))
                ];
            }

        }elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role' => 'admin']))
        {
              
                $arr = [
                    'status' => 1,
                    'message' => 'Please wait... Redirecting to your dashboard.',
                    'redirectLink' => url(route('admin_dashboard'))
                ];

        }elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role' => 'user']))
        {

           
            if(Auth::check() && Auth::user()->email_verified_at){

               $arr = [
                    'status' => 1,
                     'message' => 'Please wait... Redirecting to your dashboard.',
                    'redirectLink' => url(route('user_dashboard'))
                ];



            }else{

              Auth::logout();
             
                 $arr = [
                    'status' => 2,
                     'message' => 'Your account is not verified yet.'
                   
                ];
            }

        }else{
          
               $arr = [
                    'status' => 2,
                     'message' => 'Invalid Email | Password'
                   
                ];
        }

        return $arr;
}


}
