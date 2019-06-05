<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drones extends Model
{
    //
    protected $fillable = [

        'NombreRobot', 'NombreCapitan','NombreEquipo',
         'Institucion','Ronda', 'Tiempo','Status',

    ];
}
