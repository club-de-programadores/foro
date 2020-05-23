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


Route::get('/', function () {
    return redirect('/forums');
});
Route::view('Edit', 'Edit');
Route::resource('contacto', 'ContactosController')->names('contacto');
Route::get('contacto', 'ContactosController@index')->name('contacto');
Route::get('equipo', 'EquipoController@index')->name('equipo');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
