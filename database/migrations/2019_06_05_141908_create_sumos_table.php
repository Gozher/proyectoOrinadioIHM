<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sumos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('NombreRobot');
            $table->string('NombreCapitan');
            $table->string('NombreEquipo');
            $table->string('Institucion');             
            $table->integer('Ronda');
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
        Schema::dropIfExists('Sumos');
    }
}
