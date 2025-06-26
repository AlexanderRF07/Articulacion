<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
      protected $table = 'aprendices';
    protected $primaryKey = 'idaprendices';

    protected $fillable = ['nombre', 'apellidos'];

    public function matriculasFichas()
    {
        return $this->hasMany(MatriculaFicha::class, 'aprendices_idaprendices');
    }
}
