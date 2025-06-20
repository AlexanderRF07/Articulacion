<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    protected $table = 'aprendices';
    protected $primaryKey = 'idaprendices';
    public $timestamps = false;

    protected $fillable = ['nombre', 'apellidos', 'idusuario', 'user_iduser'];

    public function user() {
        return $this->belongsTo(User::class, 'user_iduser');
    }

    public function fichas() {
        return $this->hasMany(Ficha::class, 'aprendices_idaprendices');
    }

    public function matriculas() {
        return $this->hasMany(MatriculaFicha::class, 'aprendices_idaprendices');
    }
}
