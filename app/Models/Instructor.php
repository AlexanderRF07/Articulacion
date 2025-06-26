<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
   protected $table = 'instructores';
    protected $primaryKey = 'idinstructores';

    protected $fillable = ['nombre', 'apellidos'];

    public function fichas()
    {
        return $this->hasMany(Ficha::class, 'instructores_idinstructores');
    }
}
