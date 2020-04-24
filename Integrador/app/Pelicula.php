<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    //public $id = "id";
    //public $timestamps = "false";
    public $guarded = [];
}
