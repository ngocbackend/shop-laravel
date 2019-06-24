<?php 
	Route::get('customer','CustomerController@list_customer')->name('list_customer');
	Route::get('customer-del/{id}','CustomerController@delete_customer')->name('delete_customer');
	Route::get('customer-edit/{id}','CustomerController@edit_customer')->name('edit_customer');
	Route::post('customer-edit/{id}','CustomerController@post_customer')->name('edit_customer');
 ?>