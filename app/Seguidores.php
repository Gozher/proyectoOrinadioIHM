<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguidores extends Model
{
    //
    //
    public  $table = "Seguidores";
    protected $fillable = [
        'NombreRobot', 'NombreCapitan','NombreEquipo',
         'Institucion','Ronda', 'Tiempo','Status',         
    ];
}
