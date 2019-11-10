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
   	   return view('vendor.dashboard');
   }

}
