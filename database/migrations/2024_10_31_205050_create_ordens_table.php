<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->string('N°Orden')->primary();
            $table->string('direccion');
            $table->unsignedBigInteger('tarea_id');
            $table->foreign('tarea_id')
                  ->references('id')
                  ->on('tareas');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes');
            $table->string('estado_id');
            $table->foreign('estado_id')
                  ->references('codigo')
                  ->on('estados');
            $table->date('fecha');
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
        Schema::dropIfExists('ordens');
    }
};
