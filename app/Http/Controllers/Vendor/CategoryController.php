<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    

#-----------------------------------------------------------------
#  index
#-----------------------------------------------------------------


   public function index()
   {
   	# code...
   }

#-----------------------------------------------------------------
#  assign
#-----------------------------------------------------------------


   public function assign()
   {
   	   return view('vendors.category.assign');
   }

}
