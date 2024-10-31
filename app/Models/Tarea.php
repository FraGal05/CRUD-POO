<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $fillable = ['codigo', 'nombre'];

    // Relación uno a muchos con Orden
    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'tarea');
    }
}
