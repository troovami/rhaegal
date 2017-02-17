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

// Authentication routes...
Route::get('ingreso', 'Auth\AuthController@getLogin')->name('Auth.ingreso');
Route::post('ingreso', 'Auth\AuthController@postLogin');
Route::get('cerrar_sesion', 'Auth\AuthController@getLogout')->name('Auth.sesion');

// Registration routes...
Route::get('registrate', 'Auth\AuthController@getRegister')->name('Auth.registrate');
Route::post('registrate', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('Recuperar-Clave', 'Auth\AuthController@getRecuperar')->name('Auth.password');
Route::post('Recuperar-Clave', 'Auth\AuthController@postRecuperar');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('Auth.reset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//editar usuario
Route::get('editar', 'UsuarioController@edit')->name('Auth.edit');
Route::put('update', 'UsuarioController@update')->name('Auth.update');

//--------------------------------------------------------------------........Controller Marcas
// desplega el home de la pagina
Route::get('/','MarcasController@index')->name('marcas.index');
// desplega la vista de los modelos por marca
Route::get('moviles/{marca}/{posicion?}/{name?}','MarcasController@index1')->name('marcas.moviles');
// div de ordenar por precio
Route::get('movil/{marca}/{posicion?}/{name?}','MarcasController@prueba')->name('marcas.prueba');
// desplega vista de quienes somos
Route::get('quienes_somos','MarcasController@somos')->name('marcas.somos');
//-------------------------------------------------------------------........Controller Modelo
// desplega los detalles y caracteristica de un cel
Route::get('modelos/{version}','ModelosController@index')->name('modelos.index');
// desplega los precios y su vendedor
Route::get('precio/{version}/{posicion?}/{name?}','ModelosController@precio')->name('modelos.precio');
// resultado de una busqueda
Route::get('busqueda/{order?}/{name?}','ModelosController@busqueda')->name('modelos.busqueda');
// resultado de identificar por categoria
Route::get('categoria/{id}/{order?}/{name?}','ModelosController@categoria')->name('modelos.categoria');
// Generar los resultados de los mas vendidos
Route::get('vendidos/{id}/{order?}/{name?}','ModelosController@mas_vendido')->name('modelos.mas_vendido');
// vista de comparacion
Route::post('Comparacio','ModelosController@detalle')->name('modelos.detalle');
// vista de comparacion
Route::get('Comparacion/{id?}/{id1?}/{id2?}','ModelosController@detalles')->name('modelos.detalles');
// seleccionar por color
Route::get('colores/{id}','ModelosController@colores')->name('modelos.colores');

// AUTOCOMPLETAR v2
Route::post('autocomplet','ModelosController@autocomplet')->name('modelos.autocomplet');

///Seleccionar Favorito/////
Route::get('Favoritos/{id}','FavoritosController@favPublicacion')->name('favorito.favorito');
////eliminar favoritos
Route::get('Favorito/{id}','FavoritosController@eliminar_favoritos')->name('favorito.favorit');
/////listado de favorito///
Route::get('Cuenta/{Config}','FavoritosController@favoritos')->name('favorito.favoritos');
//////eliminar todo los favoritos
Route::get('eliminar','FavoritosController@eliminar_todo')->name('favorito.eliminar');

