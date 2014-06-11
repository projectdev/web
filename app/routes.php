<?php

Route::get('/test', function(){
	return View::make('hello');
});
<<<<<<< HEAD
Route::get('/', array('uses' => 'UsuariosController@mostrar'));
=======
Route::get('UsuariosController', array('uses' => 'UsuariosController@mostrar'));
>>>>>>> 4a593e1d2eff82460ea2404d0cafe678ecc83549
?>