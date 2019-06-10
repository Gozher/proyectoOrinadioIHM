<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hseguidores extends Model
{
    //
    public  $table = "Hseguidores";
    protected $fillable = [
        'NombreRobot','id', 'NombreCapitan','NombreEquipo',
         'Institucion','Ronda', 'Tiempo','Status',         
    ];
}
