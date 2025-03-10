<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); 
            $table->string('caratula'); 
            $table->text('contenido'); 
            $table->string('materialDidactico');
            $table->string('nombreKitRobotica');
            $table->foreign('nombreKitRobotica') 
            ->references('nombre') 
            ->on('kits_de_roboticas') 
            ->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
