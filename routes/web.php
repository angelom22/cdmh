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

//
// Route::get('/', 'MainController@home');

Route::get('/', function () {
    return view('main.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get(
//     '/',
//     [
//         'as' => 'home',
//         'uses' => 'HomeController@index'
//     ]
// );


// Ruta para filtrar las categorias
// Route::get('categorias/{name}', [
//     'uses' =>  'HomeController@filtarCategoria',
//     'as' => 'home.filtrar.categoria'
// ]);

// Ruta para filtrar las etiquetas
// Route::get('etiquetas/{name}', [
//     'uses' =>  'HomeController@filtrarEtiqueta',
//     'as' => 'home.filtrar.etiqueta'
// ]);

/*
Ruta de Nosotros
*/
Route::resource('about', 'NosotrosController');

/*
Ruta de Equipo
*/
Route::get('team', 'EquipoController@PrimerEquipo')->name('PrimerEquipo');

/*
Ruta de Equipo Filial
*/
Route::get('filial', 'EquipoController@EquipoFilial')->name('EquipoFilial');

/*
Ruta de Futbol Base
*/
Route::resource('futbase', 'futBaseController');

/*
Ruta de Contacto
*/
Route::resource('contacto', 'ContactoController');


/**
 *  Ruta de Usuarios
 */
Route::resource('usuarios', 'UsersController');

Route::get('usuarios/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'usuarios.destroy'
]);

/**
 *  Rutas para las categorias
 */
// Route::resource('categorias', 'CategoriasController');
Route::resource('categorias', 'CategoriasController')->names([
    'update'     => 'CategoriaUpdate',
    'create'     => 'CategoriaCreate',
    'destroy'    => 'CategoriaDelete',
    'edit'      => 'CategoriaEdit'
]);

Route::get('categorias/{id}/destroy', [
    'uses' => 'CategoriasController@destroy',
    'as' => 'categorias.destroy'
]);

/**
 *  Rutas para las etiquetas
 */
Route::resource('etiquetas', 'EtiquetasController')->names([
    'update'     => 'EtiquetaUpdate',
    'create'     => 'EtiquetaCreate',
    'store' => 'EtiquetaStore',
    'edit'      => 'EtiquetaEdit'
]);

Route::get('etiquetas/{id}/destroy', [
    'uses' => 'EtiquetasController@destroy',
    'as' => 'etiquetas.destroy'
]);

/**
 *  Rutas para los articulos
 */

Route::resource('articulos', 'ArticulosController')->names([
    'update'   => 'ArticuloUpdate',
    'create'     => 'ArticuloCreate',
    'store'       => 'ArticuloStore',
    'edit'         => 'ArticuloEdit'
]);

Route::get('articulos/{id}/destroy', [
    'uses' => 'ArticulosController@destroy',
    'as' => 'articulos.destroy'
]);

//  Acceso denegrado
Route::get('/denied', ['as' => 'denied', function () {
    return view('errors.403');
}]);
