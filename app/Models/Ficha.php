<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
     protected $table = 'fichas';
    protected $primaryKey = 'idfichas';

    protected $fillable = [
        'codigo',
        'fecha_inicio',
        'cupos',
        'anios_escolares_idanios_escolares',
        'colegios_idcolegios',
        'programas_idprogramas',
        'instructores_idinstructores',
    ];

    public function matriculasFichas()
    {
        return $this->hasMany(MatriculaFicha::class, 'fichas_idfichas');
    }

    public function anioEscolar()
    {
        return $this->belongsTo(AniosEscolares::class, 'anios_escolares_idanios_escolares');
    }

    public function colegio()
    {
        return $this->belongsTo(Colegio::class, 'colegios_idcolegios');
    }

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'programas_idprogramas');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructores_idinstructores');
    }
}
