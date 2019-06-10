<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hdron extends Model
{
    //
        //
    public  $table = "hdron";
    protected $fillable = [
        'NombreRobot','id', 'NombreCapitan','NombreEquipo',
         'Institucion','Ronda', 'Tiempo','Status',         
    ];
}
