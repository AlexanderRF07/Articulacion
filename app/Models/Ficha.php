<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = 'fichas';
    protected $primaryKey = 'idfichas';
    public $timestamps = false;

    protected $fillable = [
        'codigo', 'fecha_inicio', 'cupos',
        'anios escolares_idanios escolares',
        'aprendices_idaprendices',
        'colegios_idcolegios',
        'programas_idprogramas',
        'instructores_idinstructores'
    ];

    public function anioEscolar() {
        return $this->belongsTo(AniosEscolares::class, 'anios escolares_idanios escolares');
    }

    public function programa() {
        return $this->belongsTo(Programa::class, 'programas_idprogramas');
    }

    public function colegio() {
        return $this->belongsTo(Colegio::class, 'colegios_idcolegios');
    }

    public function instructor() {
        return $this->belongsTo(Instructor::class, 'instructores_idinstructores');
    }

    public function aprendiz() {
        return $this->belongsTo(Aprendiz::class, 'aprendices_idaprendices');
    }

    public function matriculas() {
        return $this->hasMany(MatriculaFicha::class, 'fichas_idfichas');
    }
}
