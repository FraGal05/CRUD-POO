<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $fillable = ['dni', 'nombre', 'apellido', 'fecha_nac'];

    // Relación uno a muchos con Orden
    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'cliente');
    }
}
