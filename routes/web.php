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

Route::resource('libro', 'LibroController');
Route::resource('equipo', 'EquipoController');
Route::resource('cargador', 'CargadorController');
Route::resource('instructor', 'InstructorController');


Route::get('/', function(){
	return view('welcome');
});

/*Route::get('/', function(){
	return view('menu');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
