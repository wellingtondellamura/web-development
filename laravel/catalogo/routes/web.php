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
    return view('front');
});

Route::get('/login', [ 'as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/authenticate','AuthController@authenticate');

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register','AuthController@storeUser');

//Route::group(['middleware'=>'auth'],function(){
    Route::get('/produtos', 'ProdutosController@index');
    Route::get('/produtos/remover/{id}', 'ProdutosController@remover');
    Route::post('/produtos', 'ProdutosController@gravar');

    Route::get('/produtos/adicionar', function () {
        return view('produtos.adicionar');
    });

//});
