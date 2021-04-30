<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['est_nombre', 'est_ap_paterno', 'est_ap_materno', 'est_ci', 'est_telefono'];
    
    public function asignaciones(){

        return $this->hasMany('App\Models\Asignaciones');
  
}
      
}
