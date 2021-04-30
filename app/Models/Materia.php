<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Materia extends Model
{
  
   protected $fillable = ['mat_nombre'];

   // Vaios registros
 
   public function asignaciones(){

      return $this->hasMany('App\Models\Asignaciones');

   }

}
