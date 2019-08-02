<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
   return 'Home';
});

Route::get('/usuarios', 'ControlUsuario@index');

Route::get('/usuarios/nuevo', 'ControlUsuario@NuevoUsuario');

Route::get('/usuarios/{id}', 'ControlUsuario@IdUsuario');

Route::get('/saludo/{name}/{nickname?}', 'ControlBienvenidaUsuario');
