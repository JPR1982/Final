<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Actor;
use App\Genero;


class PeliculasController extends Controller
{
    public function Listado(){
        $peliculasUltimas = Pelicula::orderBy("id","DESC")->take(5)->get();
        $peliculasAleatorias = Pelicula::orderByRaw("rand()")->take(5)->get();
        
        //dd($peliculasUltimas5);
        return view("ListadoPeliculas", compact("peliculasUltimas","peliculasAleatorias")); 
    }

    public function Detalle($id)
    {
        $detalle = Pelicula::find($id);
        
        //dd($detalle->Actores);
        return view("DetallePelicula",compact("detalle"));
    }

    public function Titulos()
    {
        $titulos = Pelicula::paginate(5);
        $generos = Genero::all();
        //dd($generos);
        //dd($titulos->Genero);
        return view("TitulosPeliculas",compact("titulos","generos"));

    }

    public function TitulosPorGenero(Request $request)
    {
        $id = ($request->input("genero"));
        $titulos = Pelicula::where("genre_id","=","$id")->paginate(5);
        $generos = Genero::all();

        
        return view("TitulosPeliculas",compact("titulos","generos"));
    }

    public function BuscarTitulos(Request $request)
    {
        $filtro = ($request->input("filtro"));
        //dd($filtro);

        $titulos = Pelicula::where("title","LIKE","%$filtro%")->paginate(5);
        $generos = Genero::all();
        
        return view("TitulosPeliculas",compact("titulos","generos"));
    }

}