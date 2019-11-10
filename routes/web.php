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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::post('/login', 'LoginController@check')->name('post_login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vendor/register', 'HomeController@register')->name('vendor_register');
//Route::post('/vendor/register', 'HomeController@create')->name('vendor_register');




Route::get('/admin/login', 'Admin\AdminController@index')->name('admin_login');
Route::post('/admin/login', 'Admin\AdminController@check')->name('post_admin_login');


Route::group(['middleware' => ['AdminAuth'],'prefix' => 'admin'], function(){
         require __DIR__.'/routing/admin.php';
});

Route::group(['middleware' => ['VendorAuth'],'prefix' => 'vendor'], function(){
      Route::get('/', 'Vendor\VendorController@index')->name('vendor_dashboard');    
      Route::get('/category/assign', 'Vendor\CategoryController@assign')->name('vendor_category_assign');    
});
















