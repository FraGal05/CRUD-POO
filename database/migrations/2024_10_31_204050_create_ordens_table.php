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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->string('N°Orden')->primary();
            $table->string('direccion');
            $table->foreignId('tarea')->constrained('tareas'('nombre'));
            $table->foreignId('cliente')->constrained('clientes'('nombre'));
            $table->date('fecha');
            $table->foreignId('estado')->constrained('estado'('nombre'));
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
