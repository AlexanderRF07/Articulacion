<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
    protected $primaryKey = 'idprogramas';
    public $timestamps = false;

    protected $fillable = ['programa'];

    public function fichas() {
        return $this->hasMany(Ficha::class, 'programas_idprogramas');
    }
}
