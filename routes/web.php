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
    return view('index.inicial');
})->name('inicio');

Route::prefix('roupas')->group(function (){
    Route::get('/lista','roupasController@index')->name('roupas.lista');
    Route::get('/cadastro','roupasController@create')->name('roupas.cadastro');
});
