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

Route::get("/inicial","PeliculasController@Listado");

Route::get("/detalle/{id}","PeliculasController@Detalle");

Route::get("/titulos","PeliculasController@Titulos");

Route::post("/titulos","PeliculasController@TitulosPorGenero");

Route::post("/titulosfiltro","PeliculasController@BuscarTitulos");

Route::get("/generos","GenerosController@Listado");

