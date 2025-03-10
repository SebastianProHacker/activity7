<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes__grupos', function (Blueprint $table) {
            $table->unsignedBigInteger('idEstudiante');
            $table->foreign('idEstudiante')
                ->references('id')        
                ->on('usuarios')
                ->onDelete('cascade');
            $table->unsignedBigInteger('idGrupo');
            $table->foreign('idGrupo')
                ->references('id')        
                ->on('grupos')
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
        Schema::dropIfExists('estudiantes__grupos');
    }
}
