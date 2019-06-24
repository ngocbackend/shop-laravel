<?php 
	Route::get('admin','AdminController@list_admin')->name('list_admin');
	Route::get('admin-del/{id}','AdminController@delete_admin')->name('delete_admin');
	Route::get('admin-edit/{id}','AdminController@edit_admin')->name('edit_admin');
	Route::post('admin-edit/{id}','AdminController@post_edit')->name('edit_admin');
 ?>