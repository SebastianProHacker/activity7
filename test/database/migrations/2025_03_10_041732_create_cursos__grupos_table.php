<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos__grupos', function (Blueprint $table) {
            $table->unsignedBigInteger('idCurso');
            $table->foreign('idCurso')
                ->references('id')        
                ->on('cursos')
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
        Schema::dropIfExists('cursos__grupos');
    }
}
