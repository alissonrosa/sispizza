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
Route::resource('usuario','usuarioController', [
	'names' => [
		'store' => 'user.store',
		'create' => 'user.create',
		'destroy' => 'user.destroy',
		'update' => 'user.update',
		'show' => 'user.show',
		'index' => 'user.index'
	]
	]);



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('painel')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return 'Autenticado';
    });

});