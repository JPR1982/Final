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

// RUTAS PELICULAS
Route::get("/inicial","PeliculasController@Listado");
Route::get("/detalle/{id}","PeliculasController@Detalle");
Route::get("/titulos","PeliculasController@Titulos");
Route::post("/titulos","PeliculasController@TitulosPorGenero");
Route::post("/titulosfiltro","PeliculasController@BuscarTitulos");

// RUTAS GENERO
Route::get("/generos","GenerosController@Listado");

// RUTAS ABM
Route::get("/ABM","ABMController@Inicial"); //Route::get("/ABM",function(){return view("/ABM")});
Route::get("/nuevaPelicula","ABMController@Alta");
Route::post("/nuevaPelicula","ABMController@Agregar");
Route::get("/modificarPelicula","ABMController@Vista");
Route::get("/modificarPelicula/{id}","ABMController@Modificar");
Route::get("/bajarPelicula","ABMController@Baja");
Route::post("/bajarPelicula","ABMController@Bajar");