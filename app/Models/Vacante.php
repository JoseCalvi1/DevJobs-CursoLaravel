<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $fillable = [
        'titulo', 'imagen', 'descripcion', 'skills', 'categoria_id', 'experiencia_id', 'ubicacion_id', 'salario_id'
    ];

    // Relación 1:1
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Relación 1:1
    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }

    // Relación 1:1
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }

    // Relación 1:1
    public function experiencia()
    {
        return $this->belongsTo(Experiencia::class);
    }

    // Relación 1:1
    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación 1:n
    public function candidatos()
    {
        return $this->hasMany(Candidato::class);
    }
}
