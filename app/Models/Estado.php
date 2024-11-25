<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';

   
    protected $fillable = ['estado', 'descripcion'];

   
    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'estado');
    }

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }
}
