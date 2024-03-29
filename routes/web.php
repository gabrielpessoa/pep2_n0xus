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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/equipamento', 'EquipamentoController');

Route::resource('home', 'AgendamentoController');

//Rota para adicionar grupo muscular
Route::resource('/gmuscular','GmuscularController');

//Rota para adicionar grupo turma
Route::resource('/turma', 'TurmaController');

Route::resource('/user', 'UserController');
