<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use App\Pelicula;

class ABMController extends Controller
{
    // Menu Inicial
    public function Inicial()
    {
        return view("/ABM");
    }

    //Nueva Pelicula Vista
    public function Alta()
    {
        $generos = Genero::all();
        return view("/NuevaPelicula",compact("generos"));
    }

    //Nueva Pelicula agregarla
    public function Agregar(Request $req)
    {
        
        // VALIDACIONES
        $reglas = [
            "titulo" => "string|min:3|max:100|unique:movies,title",
            "rating" => "numeric|min:0|max:10",
            "premios" => "integer|min:0",
            "estreno" => "date"
        ];
        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres",
            "max" => "El campo :attribute debe tener un maximo de :max caracteres",
            "date" => "El campo :attribute debe ser una fecha",
            "numeric" => "El campo :attribute debe ser un numero",
            "integer" => "El campo :attribute debe ser un numero entero",
            "unique" => "La pelicula ya existe",
        ];

        $this->validate($req, $reglas, $mensajes);

        
        // GUARDAR
        $pelicula = new Pelicula;

        $pelicula->title = $req["titulo"];
        $pelicula->rating = $req["rating"];
        $pelicula->awards = $req["premios"];
        $pelicula->release_date = $req["estreno"];
        $pelicula->genre_id = $req["genero"];

        $pelicula->save();

        return redirect("inicial");
    }

        // Listado de Peliculas
        public function Vista()
        {
            $titulos = Pelicula::all();
            $titulosId = Pelicula::where("id","=","1")->get();
            $generos = $generos = Genero::all();
            //dd($titulosId);
            return view("/ModificarPelicula",compact("titulos","titulosId","generos"));
        }

        // Abrir Pelicula
        public function Modificar($id)
        {
            $titulos = Pelicula::where("id","=","$id");
            return view("/ModificarPelicula",compact("titulos"));
        }

        // Abrir Pelicula
        public function Baja()
        {
            $titulos = Pelicula::all();
            return view("/bajarPelicula",compact("titulos"));
        }


        // Abrir Pelicula
        public function Bajar(Request $request)
        {
            $id = ($request->input("titulo"));
            Pelicula::destroy($id);
            $titulos = Pelicula::all(); 

            return view("/bajarPelicula",compact("titulos"));
        }
}
