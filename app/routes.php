<?php

Route::get('/test', function(){
	return View::make('hello');
});
Route::get('/', array('uses' => 'UsuariosController@mostrar'));
Route::get('usuarios', array('uses' => 'UsuariosController@mostrar'));
?>