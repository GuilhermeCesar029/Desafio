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

Route::prefix('crud')->group(function() {
    Route::get('/', 'CrudController@index')->name('index');
    Route::get('/cadatrar', 'CrudController@create')->name('cadastro');
    Route::post('/cadatrar', 'CrudController@store')->name('cadastro.post');
    Route::get('/editar/{id}', 'CrudController@edit')->name('editar');
    Route::put('/editar/{id}', 'CrudController@update')->name('editar.put'); 
    Route::get('/deletar/{id}', 'CrudController@destroy')->name('deletar');   
});
