<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    //habilitar el guardado
    //mostrar como esta estructuradala tabla
     protected$fillable = ['nombre'];
    //enseñar como relacionarle con las otras tablas

    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }
}
