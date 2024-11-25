<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    public function run()
    {
        Estado::insert([
            ['nombre' => 'Pendiente'],
            ['nombre' => 'En progreso'],
            ['nombre' => 'Finalizado'],
            ['nombre' => 'Cancelado'],
            ['nombre' => 'En revisión'],
        ]);
    }
}
