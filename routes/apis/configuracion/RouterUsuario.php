<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'usuario','middleware' =>['cors']], function () {

/*
* 1.  DESCRIPCIÓN: hacer el registro de un usuario por medio de post
* 2.  PARAMETRO BODY: 
    {
        "name": "Fabio Andres Rojas",
        "email": "ing.fabiorojas90@gmail.com",
        "password": "qaz123456"
    }
* 3.  Api Local: http://localhost:8000/api/v1/usuario
*/
Route::post('','configuracion\UsuarioController@post_Usuario');
/*
* 1.  DESCRIPCIÓN: hacer el logeo de un usuario por medio de post
* 2.  PARAMETRO BODY: 
    {
        "email": "ing.fabiorojas90@gmail.com",
        "password": "qaz123456"
    }
* 3.  Api Local: http://localhost:8000/api/v1/usuario/login
*/
Route::post('/login','configuracion\UsuarioController@post_login');

});