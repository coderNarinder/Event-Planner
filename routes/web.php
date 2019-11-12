<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', function () {
\Auth::logout();
return redirect('/login');
});

Auth::routes(['verify' => true]);
Route::post('/login', 'LoginController@check')->name('post_login');
Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/home', 'HomeController@index')->name('homepage2');

Route::get('/vendor/register', 'HomeController@register')->name('vendor_register');

Route::post('/ajax/register', 'HomeController@userRegister')->name('ajax_register');
Route::post('/ajax/login', 'HomeController@userLogin')->name('ajax_login');

//Route::post('/vendor/register', 'HomeController@create')->name('vendor_register');
Route::get('/admin/login', 'Admin\AdminController@index')->name('admin_login');
Route::post('/admin/login', 'Admin\AdminController@check')->name('post_admin_login');



Route::group(['middleware' => ['AdminAuth'],'prefix' => 'admin'], function(){
require __DIR__.'/routing/admin.php';
});


# user middleware

Route::group(['middleware' => ['UserAuth'],'prefix' => 'user'], function(){
         Route::get('/', 'HomeController@index')->name('user_dashboard'); 
          
});




Route::group(['middleware' => ['VendorAuth'],'prefix' => 'vendor'], function(){
Route::get('/', 'Vendor\VendorController@index')->name('vendor_dashboard'); 
Route::get('/settings', 'Vendor\VendorController@vendor_profile')->name('vendor_profile'); 
Route::post('/settings', 'Vendor\VendorController@vendorProfile')->name('vendor_profile');
Route::get('/settings/password', 'Vendor\VendorController@password')->name('vendor_password'); 
Route::post('/settings/password', 'Vendor\VendorController@changePassword')->name('vendor_password'); 
Route::get('/category/assign', 'Vendor\CategoryController@assign')->name('vendor_category_assign');    
Route::post('/category/assign', 'Vendor\CategoryController@assignCategory')->name('vendorAssignCategory'); 
Route::get('/{slug}', 'Vendor\ManagementController@index')->name('vendor_category_management');  
});