<?php

$namespace = "Rajaongkir\Http\Controllers";

Route::group([
	'namespace' =>  $namespace,
	'prefix'	=> 'rajaongkir'
],function(){
	Route::get('/','RajaongkirController@index');
	Route::post('/cost','RajaongkirController@cost');
});

