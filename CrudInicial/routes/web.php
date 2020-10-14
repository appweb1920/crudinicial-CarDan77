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

Route::get('/', 'RecolectoresController@muestra');
Route::get('/CreaRecolector', function () {return view('CreaRecolector');});
Route::get('/CreaPunto', function () {return view('CreaPuntos');});
Route::post('/guardaRecolector', 'RecolectoresController@GuardaRecolector');
Route::post('/GuardaEdicionRecolector', 'RecolectoresController@GuardaEdicion');
Route::get('/edita/{id}', 'RecolectoresController@EditaRecolector');
Route::get('/borra/{id}', 'RecolectoresController@Borrar');

Route::post('/guardaPunto', 'PuntoController@GuardaPunto');
Route::post('/GuardaEdicionPunto', 'PuntoController@GuardaEdicionPunto');
Route::get('/editaPunto/{id}', 'PuntoController@EditaPunto');
Route::get('/borraPunto/{id}', 'PuntoController@Borrar');