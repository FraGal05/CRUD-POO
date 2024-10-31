<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $primaryKey = 'N°Orden';
    public $incrementing = false;
    protected $fillable = ['N°Orden', 'direccion', 'tarea', 'cliente', 'fecha', 'estado'];

    // Relación con Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    // Relación con Estado
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado');
    }

    // Relación con Tarea
    public function tarea()
    {
        return $this->belongsTo(Tarea::class, 'tarea');
    }
}

