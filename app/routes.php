<?php

Route::get('/test', function(){
	return View::make('hello');
});
Route::get('/', array('uses' => 'UsuariosController@mostrar'));
?>