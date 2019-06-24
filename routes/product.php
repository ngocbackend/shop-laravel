<?php 
	Route::get('product-list','ProductController@list')->name('product-list');
	Route::get('/product-add','ProductController@add')->name('product-add');
	Route::post('/product-add','ProductController@post_add')->name('product-add');
	Route::get('/ajax/danhmuc/{idgoc}','ProductController@danhmuc');
	Route::get('product-delete/{id}','ProductController@delete')->name('product-delete');
	Route::get('product-edit/{id}','ProductController@edit')->name('product-edit');
	Route::post('product-edit/{id}','ProductController@post_edit')->name('product-edit');

 ?>