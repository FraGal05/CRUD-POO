<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{

    use HasFactory;
    
    protected $fillable = ['nrOrden', 'direccion', 'cliente_id', 'tarea_id', 'estado_id', 'fecha'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tarea()
    {
        return $this->belongsTo(Tarea::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
