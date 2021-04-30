<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignaciones extends Model
{
    use HasFactory;

    protected $fillable = ['id_materia', 'id_estudiante', 'mat_nombre'];

    public function estudiante(){

        return $this->belongsTo('App\Models\Estudiante');

    }

    public function materia() {
        return $this->belongsTo('App\Models\Materia');
    }
}
