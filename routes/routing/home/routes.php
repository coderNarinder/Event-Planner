<?php





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







 