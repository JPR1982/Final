<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    //public $id = "id";
    //public $timestamps = "false";
    public $guarded = [];

    //RELACION PELICULAS ACTORES DE MUCHOS A MUCHOS
    public function Actores()
    {
                //1-Objeto que va a devolver 2- Nombre de la tabla intermedia 3- Clave foranea model actual tabla intermedia 4- Clave foranea relacion tabla intermedia
        return $this->belongsToMany("App\Actor","actor_movie","movie_id","actor_id");

    }

    //RELACION PELICULAS A GENERO DE 1 A 1
    public function Genero()
    {
        return $this->belongsTo("App\Genero","genre_id");
    }

}
