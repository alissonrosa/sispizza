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

Route::resource('bebida','bebidaController');
Route::resource('funcionario','funcionarioController');
Route::resource('ingrediente','ingredienteController');
Route::resource('pedido','pedidoController');
Route::resource('produto','produtoController');
Route::resource('usuario','usuarioController');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
