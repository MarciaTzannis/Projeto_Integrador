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

Route::get('/','PaginaInicialController@exibirPaginaInicial');
Route::get('/','PaginaInicialController@exibirModalidades');

Route::get('/cadastroUsuario','CadastroUsuarioController@exibirCadastroUsuario');


Route::get('/feed','FeedController@exibirFeed');
Route::get('/feed/{slug}','FeedController@exibirDetalhes');

Route::get('/cadastroEvento','CadastroEventoController@exibirCadastroEvento')->middleware(['auth']);
Route::post('/feed', 'CadastroEventoController@novoEvento')->middleware(['auth']);

Route::get('/post','PostController@exibirPost')->middleware(['auth']);

// routes ele já considera o metodo Post então é necessário criar o route::post para cadastrar usuario
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
