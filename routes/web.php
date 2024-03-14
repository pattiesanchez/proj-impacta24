<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

Route::get('/', 'HomeController@index')->name('site.home');

//produtos
Route::resource('produto', 'ProdutoController');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.home').'">clique aqui</a> para ir para página inicial';
});
