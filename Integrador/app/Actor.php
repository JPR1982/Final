<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $table = "actors";
    //public $id = "id";
    //public $timestamps = "false";
    public $guarded = [];

    // RELACION ACTORES A PELICULAS MUCHOS A MUCHOS
    public function Peliculas()
    {
        //1-Objeto que va a devolver 2- Nombre de la tabla intermedia 3- Clave foranea model actual tabla intermedia 4- Clave foranea relacion tabla intermedia
        return $this->belongsToMany("App\Pelicula","actor_movie","actor_id","movie_id");

    }
}
