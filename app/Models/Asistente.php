<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'nombre', 
        'apellidos', 
        'edad', 
        'email', 
        'direccion', 
        'ciudad', 
        'telefono',
    ];

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
