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
    return view('welcome');
});

Route::resource('usuarios','UsuarioController');
//Route::resource('enderecos','EnderecoController');

Route::get('enderecos/{usuario_id}', [
    'as' => 'enderecos.create',
    'uses' => 'EnderecoController@create'
]);
Route::get('filmes/{usuario_id}', [
    'as' => 'filmes.create',
    'uses' => 'FilmeController@create'
]);

Route::get('cidades/{estado_id}', [
    'as' => 'cidades.listaPorEstado',
    'uses' => 'CidadeController@listaPorEstado'
]);
Route::post('enderecos', [
    'as' => 'enderecos.store',
    'uses' => 'EnderecoController@store'
]);
Route::post('filmes', [
    'as' => 'filmes.store',
    'uses' => 'FilmeController@store'
]);
