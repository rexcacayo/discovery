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

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('preguntas', 'preguntasController');

Route::resource('propiedadesvacacionales', 'propiedadesvacacionalesController');

Route::resource('clubvacacionals', 'clubvacacionalController');

Route::resource('invitados', 'invitadosController');

Route::resource('tarjetacreditos', 'tarjetacreditoController');

Route::resource('clientes', 'clienteController');

Route::resource('promotores', 'promotoresController');

Route::resource('paises', 'paisesController');



Route::resource('empleados', 'empleadosController');

Route::resource('ultimasVacaciones', 'ultimasVacacionesController');

Route::resource('actualesVacaciones', 'actualesVacacionesController');

Route::resource('futurasVacaciones', 'futurasVacacionesController');