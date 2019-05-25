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

Route::get('/','HomeController@exibirHome');

Route::get('/cadastroUsuario','CadastroUsuarioController@exibirCadastroUsuario');

Route::get('/feed','FeedController@exibirFeed');

Route::get('/cadastroEvento','CadastroEventoController@exibirCadastroEvento');

Route::get('/post','PostController@exibirPost');