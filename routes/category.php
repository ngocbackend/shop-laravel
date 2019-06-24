<?php 

	Route::get('/category-add','CategoryController@add')->name('category-add');
	Route::post('/category-add','CategoryController@post_add')->name('category-add');
	Route::get('/category-delete/{id}','CategoryController@delete_category')->name('category-delete');
	Route::get('/category-edit/{id}','CategoryController@edit')->name('category-edit');
    Route::post('/category-edit/{id}','CategoryController@post_edit')->name('category-edit');
    

 ?>