<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drones extends Model
{
    //
    public  $table = "Drones";
    protected $fillable = [

        'NombreRobot', 'NombreCapitan','NombreEquipo',
         'Institucion','Ronda', 'Tiempo','Status',
         

    ];
    
}
