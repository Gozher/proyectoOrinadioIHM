<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seguidores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('NombreRobot');
            $table->string('NombreCapitan');
            $table->string('NombreEquipo');
            $table->string('Institucion');
            $table->Integer('Ronda');            
            $table->string('Tiempo');
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
        Schema::dropIfExists('seguidores');
    }
}
