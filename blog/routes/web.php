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
Route::get('summernoteeditor',array('as'=>'summernoteeditor.get','uses'=>'SummernotefileController@getSummernoteeditor'));
Route::post('summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernotefileController@postSummernoteeditor'));


/*
 * Rotas Admin
 * **/
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
],function (){
    Route::get('/', 'AdminController@index')->name('admin.index');

    /*
     * Rotas Noticias
     * **/
    Route::group([
        'prefix' => 'noticias',
        'namespace' => 'Noticias'
    ],function() {
        Route::get('/', 'NoticiasController@index')->name('admin.noticias.index');
        Route::get('/adicionar-noticia', 'NoticiasController@formNoticia')->name('admin.noticias.form');

        Route::post('/adicionar-categoria', 'NoticiasController@adicionarCategoria')->name('admin.usuarios.adicionar-categoria');
    });

    /*
     * Rotas Usuários
     * **/
    Route::group([
        'prefix' => 'usuarios',
        'namespace' => 'Usuarios'
    ], function(){
        Route::get('/', 'UsuariosController@index')->name('admin.usuarios.index');
    });
});
