<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('idMaestro');
            $table->foreign('idMaestro')
                ->references('id')        
                ->on('usuarios')
                ->onDelete('cascade');
            $table->unsignedBigInteger('idTipo');
            $table->foreign('idTipo')
                ->references('id')        
                ->on('tipo_de_grupos')
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
        Schema::dropIfExists('grupos');
    }
}
