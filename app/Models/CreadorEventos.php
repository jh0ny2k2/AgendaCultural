<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreadorEventos extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni', 
        'nombre', 
        'apellidos', 
        'telefono', 
        'email', 
        'direccion', 
        'ciudad', 
        'empresa', 
        'puesto',
    ];

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
