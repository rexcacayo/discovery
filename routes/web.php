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

Route::get('clientes/recorrido', 'clienteController@recorrido');

Route::get('clientes/form1/{id}', 'clienteController@form1');

Route::post('clientes/form2', 'clienteController@form2');

Route::post('clientes/form3', 'clienteController@form3');

Route::post('clientes/form4', 'clienteController@form4');

Route::post('clientes/form5', 'clienteController@form5');

Route::post('clientes/form6', 'clienteController@form6');

Route::post('clientes/form7', 'clienteController@form7');

Route::post('clientes/form8', 'clienteController@form8');

Route::post('clientes/form9', 'clienteController@form9');

Route::post('clientes/form10', 'clienteController@form10');

Route::post('clientes/form11', 'clienteController@form11');

Route::post('clientes/form12', 'clienteController@form12');

Route::post('clientes/form13', 'clienteController@form13');

Route::post('clientes/form14', 'clienteController@form14');

Route::post('clientes/form15', 'clienteController@form15');

Route::post('clientes/form16', 'clienteController@form16');

Route::post('clientes/form17', 'clienteController@form17');

Route::post('clientes/form18', 'clienteController@form18');

Route::post('clientes/form19', 'clienteController@form19');

Route::post('clientes/form20', 'clienteController@form20');

Route::post('clientes/form21', 'clienteController@form21');

Route::post('clientes/form22', 'clienteController@form22');

Route::post('clientes/form23', 'clienteController@form23');

Route::post('clientes/form24', 'clienteController@form24');

Route::get('clientes/ver', 'clienteController@proceso');

Route::get('clientes/ver/actualizar', 'clienteController@actualizarProceso');

Route::resource('clientes', 'clienteController');

Route::resource('promotores', 'promotoresController');

Route::resource('paises', 'paisesController');



Route::resource('empleados', 'empleadosController');

Route::resource('ultimasVacaciones', 'ultimasVacacionesController');

Route::resource('actualesVacaciones', 'actualesVacacionesController');

Route::resource('futurasVacaciones', 'futurasVacacionesController');