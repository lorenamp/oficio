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



Auth::routes();

Route::view('/home', 'auth.login');

Route::group(['prefix' => 'operador', 'middleware' => ['role:operador']], function() {
    Route::view('/admin', 'roles.operador.v_oper');
});
Route::group(['prefix' => 'usuario', 'middleware' => ['role:usuario']], function() {
    Route::view('/usr', 'roles.usuario.v_usr');
});