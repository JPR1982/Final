<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;


class PeliculasController extends Controller
{
    public function Listado(){
        $peliculasUltimas = Pelicula::orderBy("id","DESC")->take(5)->get();
        $peliculasAleatorias = Pelicula::orderByRaw("rand()")->take(5)->get();
        
        //dd($peliculasUltimas5);
        return view("ListadoPeliculas", compact("peliculasUltimas","peliculasAleatorias")); 
    }
}
