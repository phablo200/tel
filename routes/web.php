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
Route::get('/', 'AutenticarController@entrar')->name('entrar');
Route::get('/entrar', 'AutenticarController@entrar')->name('entrar');
Route::get('/autenticar', 'AutenticarController@autenticar')->name('autenticar');
Route::get('/sair', 'AutenticarController@sair')->name('sair');


Route::get('/usuario', 'UsuarioController@index')->name('usuario.index');
Route::get('/usuario/criar', 'UsuarioController@criar')->name('usuario.criar');
Route::post('/usuario/salvar', 'UsuarioController@salvar')->name('usuario.salvar');
