<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class VendorController extends Controller
{
    

public $vendorCategories =0;
//public $user_id =\Auth::user()->id;
#---------------------------------------------------	
#  construct
#---------------------------------------------------

	public function __construct()
	 {	
	     $this->middleware('auth');
       $this->middleware(function ($request, $next) {
          if(Auth::user()->services->count() == 0){
          	return redirect()->route('vendor_category_assign');
          }
          return $next($request);
          
       });

      
		 
	}
#---------------------------------------------------	
#  construct
#---------------------------------------------------


public function checkCategoryOfVendor()
{
	     $vendorCategory = \App\VendorCategory::where('user_id',Auth::user()->id);
	    $this->vendorCategories = $vendorCategory->count();
}

#---------------------------------------------------  
#  dashboard
#---------------------------------------------------

   public function index($value='')
   {

     
       return view('vendors.dashboard');
   }


#---------------------------------------------------	
#  vendor_profile
#---------------------------------------------------

   public function vendor_profile($value='')
   {
   	   return view('vendors.settings');
   }

#---------------------------------------------------  
#  vendor_profile
#---------------------------------------------------




public function vendorProfile(Request $request)
{
   $this->validate($request,[
         'image' => 'image',
         'name' => 'required',
    ]);
     $path = 'images/vendors/profile/';
     $u = User::find(Auth::user()->id);
     $u->profile_image = $request->hasFile('image') ? uploadFileWithAjax($path,$request->file('image')) : $u->profile_image;
     $u->name = $request->name;
     $u->save();
    
     return redirect()->back()->with('flash_message',"Your Profile image has been changed"); 
}



#---------------------------------------------------  
#  vendor_profile
#---------------------------------------------------

   public function password($value='')
   {
       return view('vendors.password');
   }

#---------------------------------------------------  
#  vendor_profile
#---------------------------------------------------




public function changePassword(Request $request)
{
              $this->validate($request,['old_password' => 'required','password' => ['required', 'string', 'min:6', 'confirmed']]);
                  $u= User::find(Auth::user()->id);
                 if (\Hash::check($request->old_password , $u->password))
                 {          
                             $u->password= \Hash::make($request->password);
                             $u->save();
                             return redirect()->back()->with('flash_message',"your password has been changed");
                      
                           
                 }else{
                                 
                                  
                        return redirect()->back()->with('old_password',"invalid old password");
                 }
      
}

}
