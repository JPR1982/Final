<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $table = "genres";
    //public $id = "id";
    //public $timestamps = "false";
    public $guarded = [];

    // RELACION GENERO A PELICULAS DE 1 A MUCHOS
    public function Peliculas()
    {
        return $this->hasMany("App\Pelicula","genre_id");
        
    }
}
