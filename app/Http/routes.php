<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Marca;

Route::get('/', function () {
	//$prueba=Probando::where('str_marca', 'acer')->max('id');
	$prueba=Marca::all();
    return view('index', compact('prueba'));
});

Route::get('/','MarcasController@index')->name('marcas.index');
Route::get('moviles/{marca}/{posicion?}/{name?}','MarcasController@index1')->name('marcas.moviles');
Route::get('movil/{marca}/{posicion?}/{name?}','MarcasController@prueba')->name('marcas.prueba');
Route::get('modelos/{version}','ModelosController@index')->name('modelos.index');
Route::get('busqueda','ModelosController@busqueda')->name('modelos.busqueda');
Route::get('categoria/{id}','ModelosController@categoria')->name('modelos.categoria');
Route::get('quienes_somos','MarcasController@somos')->name('marcas.somos');

