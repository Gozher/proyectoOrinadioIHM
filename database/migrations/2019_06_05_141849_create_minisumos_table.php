<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinisumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Minisumos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreRobot');
            $table->string('NombreCapitan');
            $table->string('NombreEquipo');
            $table->string('Institucion'); 
            $table->string('Ronda_uno');
            $table->string('Ronda_dos');
            $table->string('Ronda_tres');
            $table->string('Resultado_ronda');
            $table->string('Status'); 
            $table->timestamps();

  });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Minisumos');
    }
}
