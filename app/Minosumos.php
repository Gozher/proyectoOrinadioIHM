<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minosumos extends Model
{
    //
    public  $table = "Minisumos";
        protected $fillable = [
        'NombreRobot', 'NombreCapitan','NombreEquipo',
         'Institucion','Status','Ronda','id' ];
}
