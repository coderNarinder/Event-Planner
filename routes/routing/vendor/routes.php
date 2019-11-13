<?php


 

Route::group(['middleware' => ['VendorAuth'],'prefix' => 'vendor'], function(){


		Route::get('/', 'Vendor\VendorController@index')->name('vendor_dashboard'); 
		Route::get('/settings', 'Vendor\VendorController@vendor_profile')->name('vendor_profile'); 
		Route::post('/settings', 'Vendor\VendorController@vendorProfile')->name('vendor_profile');
		Route::get('/settings/password', 'Vendor\VendorController@password')->name('vendor_password'); 
		Route::post('/settings/password', 'Vendor\VendorController@changePassword')->name('vendor_password'); 
		
		Route::get('/category/assign', 'Vendor\CategoryController@assign')->name('vendor_category_assign');    
		Route::post('/category/assign', 'Vendor\CategoryController@assignCategory')->name('vendorAssignCategory'); 



		#-------------------------------------------------------------------------------------------
		#  vendor_category_management
		#-------------------------------------------------------------------------------------------
		Route::get('/category/{slug}/basic/information', 'Vendor\ManagementController@about')->name('vendor_category_management'); 
		Route::get('/category/{slug}/gallery/images', 'Vendor\ManagementController@images')->name('vendor_category__image_management');
		Route::post('/ajax/category/management/gallery/images', 'Vendor\ManagementController@upload')->name('upload_vendor_image_gallery');


        Route::get('/category/{slug}/delete/metas/{id}', 'Vendor\ManagementController@delete')->name('vendor_category_meta_delete');


        Route::get('/category/{slug}/gallery/videos', 'Vendor\ManagementController@videos')->name('vendor_category_videos_management');

        Route::get('/category/{slug}/gallery/videos/add', 'Vendor\ManagementController@addVideos')->name('vendor_category_videos_add_management');
        Route::post('/category/{slug}/gallery/videos/add', 'Vendor\ManagementController@saveVideos')->name('vendor_category_videos_add_management');



});