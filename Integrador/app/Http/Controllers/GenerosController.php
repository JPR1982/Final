<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Actor;
use App\Genero;

class GenerosController extends Controller
{
    public function Listado(){
        $generos = Genero::all();
        //dd($generos);
        return view("ListadoGeneros",compact("generos")); 
    }
}
