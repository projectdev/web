<?php

Route::get('/test', function(){
	return View::make('hello');
});
Route::get('UsuariosController', array('uses' => 'UsuariosController@mostrar'));
?>