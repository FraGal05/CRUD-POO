<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $fillable = ['codigo', 'nombre'];

    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'estado');
    }
}
