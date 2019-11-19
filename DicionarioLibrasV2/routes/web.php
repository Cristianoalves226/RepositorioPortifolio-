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

//home da pagina
Route::get('/', ['as' => 'site.index', 'uses' => 'Site\HomeController@index']);

//Comunicação com Banco de Dados

 Route::post('/busca', ['as' => 'admin.buscar', 'uses' => 'Site\HomeController@busca']);


//Autenticação de Usuario
 Route::get('/login', ['as' => 'admin.login', 'uses' => 'Site\HomeController@login']);
 Route::post('/login/entrar', ['as' => 'admin.login.entrar', 'uses' => 'Site\HomeController@entrar']);
 Route::get('/login/sair', ['as' => 'admin.login.sair', 'uses' => 'Site\HomeController@sair']);



   
   
 Route::group(['middleware'=>'auth'],function(){

   Route::get('/tabela',['as'=>'tabela','uses'=>'Site\HomeController@listasinais']);
   Route::get('/adicionar', ['as' => 'site', 'uses' => 'Site\HomeController@adicionar']);
   Route::post('/salvar', ['as' => 'home.salvar', 'uses' => 'Site\HomeController@salvar']);
   Route::get('/editar/{id}', ['as' => 'admin.tabela.editar', 'uses' => 'Site\HomeController@editar']);
   Route::put('/editar/{id}', ['as' => 'admin.editar.atualizar', 'uses' => 'Site\HomeController@atualizar']);
   Route::get('/deletar/{id}', ['as' => 'admin.editar.deletar', 'uses' => 'Site\HomeController@deletar']);

 });


//Criacao de Usuario
 Route::get('/contaNova', ['as' => 'admin.contaNova', 'uses' => 'Site\HomeController@contaNova']);
 Route::post('/contaNova/adicionar', ['as' => 'admin.contaNova.adicionar', 'uses' => 'Site\LoginController@salvar']);


