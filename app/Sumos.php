<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumos extends Model
{
    //
    public  $table = "Sumos";

    protected $fillable = [
        'NombreRobot', 'NombreCapitan','NombreEquipo',
         'Institucion','Ronda_uno','Ronda_dos', 'Ronda_tres','Status','Resultado_ronda' ];

}
