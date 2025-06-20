<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table = 'colegios';
    protected $primaryKey = 'idcolegios';
    public $timestamps = false;

    protected $fillable = ['nombre', 'departamento', 'ciudad'];

    public function fichas() {
        return $this->hasMany(Ficha::class, 'colegios_idcolegios');
    }
}
