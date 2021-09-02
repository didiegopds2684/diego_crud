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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

/*Mostra usuarios */
Route::get('/usuarios', 'UsuariosController@index')->middleware('auth');

/* Adiciona usuarios*/
Route::get('/usuarios/new', 'UsuariosController@new')->middleware('auth');
Route::post('/usuarios/add', 'UsuariosController@add')->middleware('auth');

/*Edita Usuarios */
Route::get('/usuarios/{id}/edit', 'UsuariosController@edit')->middleware('auth');
Route::post('/usuarios/update/{id}', 'UsuariosController@update')->middleware('auth');

/*Deleta Usuarios*/
Route::delete('/usuarios/delete/{id}', 'UsuariosController@delete')->middleware('auth');

