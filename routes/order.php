<?php 
	Route::get('order','OrderController@order')->name('order');
	Route::post('update-order/{id}','OrderController@update_order')->name('update-order');
	Route::get('order-detai/{id}','OrderController@order_detail')->name('order-detai');
	
 ?>