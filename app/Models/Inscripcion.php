<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'asistente_id',
        'evento_id',
        'numEntradas',
        'estado'
    ];

    public function asistente() {
        return $this->belongsTo(Asistente::class);
    }

    public function evento() {
        return $this->belongsTo(Evento::class);
    }
}
