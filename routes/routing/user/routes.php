<?php





Route::group(['middleware' => ['UserAuth'],'prefix' => 'user'], function(){
         Route::get('/', 'HomeController@index')->name('user_dashboard'); 
          
});