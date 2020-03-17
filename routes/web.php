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


Auth::routes(['register' => false]);

Route::get('/', 'CoronavirusController@index')->name('index');
//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController');
Route::get('/aviso', 'CoronavirusController@aviso');
Route::resource('coronavirus', 'CoronavirusController');
Route::get('reportes/export', 'ReporteController@export')->name('reporte.export');
Route::resource('reportes', 'ReporteController');
