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

Auth::routes();

//Monografias
Route::get('/monografias', 'MonografiaController@index');

Route::get('/monografias/inserir', function(){
    return view('monografias.inserir');
});

Route::post('/monografias/inserir', 'MonografiaController@create');
Route::get('/monografias/remover/{id}', 'MonografiaController@destroy');

//Contatos
Route::get('/contatos', function(){
    return view('contatos.inserir');
});

Route::post('/contatos/inserir', 'ContatoController@create');

//Dicas
Route::get('/dicas', function(){
    return view('dicas.welcome');
});