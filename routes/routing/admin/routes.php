<?php

Route::get('/admin/login', 'Admin\AdminController@index')->name('admin_login');
Route::post('/admin/login', 'Admin\AdminController@check')->name('post_admin_login');

Route::group(['middleware' => ['AdminAuth'],'prefix' => 'admin'], function(){
       

		Route::get('/','Admin\AdminController@dashboard')->name('admin_dashboard');
		Route::get('/profile/settings','Admin\AdminController@profile')->name('admin_settings');
		Route::post('/profile/settings/image','Admin\AdminController@changeProfileImage')->name('post_admin_settings');
		Route::post('/profile/settings/password','Admin\AdminController@change')->name('post_admin_password_settings');



		Route::get('/logout','Admin\AdminController@logout')->name('admin_logout');

		#----------------------------------------------------------------
		#  Category Management
		#----------------------------------------------------------------



		Route::get('/category/index','Admin\CategoryController@index')->name('list_category');
		Route::get('/category/index/sorting','Admin\CategoryController@sortingIndex')->name('index_sorting_category');
		Route::post('ajax/category/index/sorting','Admin\CategoryController@sorting')->name('sorting_category');
		Route::get('/category/create','Admin\CategoryController@create')->name('create_category');
		Route::post('/category/create','Admin\CategoryController@store')->name('store_category');
		Route::get('/category/edit/{slug}','Admin\CategoryController@edit')->name('edit_category');
		Route::get('/category/variations/{slug}','Admin\CategoryController@category_variations')->name('category_variations');

		Route::post('/category/variations/{slug}','Admin\CategoryController@category_variations_save')->name('category_variations_save');

		Route::post('/category/edit/{slug}','Admin\CategoryController@update')->name('update_category');
		Route::get('/category/delete/{id}','Admin\CategoryController@delete')->name('delete_category');
		Route::post('/category/delete/image/{id}','Admin\CategoryController@deleteImage')->name('delete_category_image');
		Route::get('/category/ajax/edit/','Admin\CategoryController@edit2')->name('edit_ajax_category');


		#----------------------------------------------------------------
		#  Event/Celebration Management
		#----------------------------------------------------------------

		Route::get('/events','Admin\EventController@index')->name('list_events');
		Route::get('/event/create','Admin\EventController@create')->name('create_event_type');
		Route::post('/event/create','Admin\EventController@store')->name('store_events');
		Route::get('/event/ajax','Admin\EventController@ajax_getEvent')->name('ajax_getEvents');
		Route::get('/event/edit/{slug}','Admin\EventController@edit')->name('edit_event');
		Route::post('/event/edit/{slug}','Admin\EventController@update')->name('update_event');
		Route::get('/event/status/{slug}','Admin\EventController@event_status')->name('event_status');

		#----------------------------------------------------------------
		#  Amenities/Games Management
		#----------------------------------------------------------------
		// GAMES
		Route::get('/games','Admin\AmenityGamesController@game_index')->name('list_games');

		Route::get('/amenities','Admin\AmenityGamesController@index')->name('list_amenities');
		Route::get('/amenities/create','Admin\AmenityGamesController@create')->name('create_amenities_type');
		Route::post('/amenities/create','Admin\AmenityGamesController@store')->name('store_amenities');
		Route::get('/amenities/ajax','Admin\AmenityGamesController@ajax_getAmenity')->name('ajax_getAmenity');
		//  games
		Route::get('/games/ajax','Admin\AmenityGamesController@ajax_getGames')->name('ajax_getGames');
		Route::get('/amenities/edit/{slug}','Admin\AmenityGamesController@edit')->name('edit_amenity');
		Route::post('/amenities/edit/{slug}','Admin\AmenityGamesController@update')->name('update_amenity');
		Route::get('/amenities/status/{slug}','Admin\AmenityGamesController@amenity_status')->name('amenity_status');



		#----------------------------------------------------------------
		#  Event/Celebration Management
		#----------------------------------------------------------------

		Route::get('/seasons','Admin\SeasonController@index')->name('list_seasons');
		Route::get('/seasons/create','Admin\SeasonController@create')->name('create_seasons');
		Route::post('/seasons/create','Admin\SeasonController@store')->name('store_seasons');
		Route::get('/seasons/ajax','Admin\SeasonController@ajax_getEvent')->name('ajax_getSeasons');
		Route::get('/seasons/edit/{slug}','Admin\SeasonController@edit')->name('edit_seasons');
		Route::post('/seasons/edit/{slug}','Admin\SeasonController@update')->name('update_seasons');
		Route::get('/seasons/status/{slug}','Admin\SeasonController@event_status')->name('seasons_status');








});