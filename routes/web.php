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

Route::get('/monografias', 'MonografiaController@index');

Route::get('/monografias/inserir', function(){
    return view('monografias.inserir');
});

Route::post('/monografias/inserir', 'MonografiaController@create');
Route::get('/monografias/remover/{id}', 'MonografiaController@destroy');