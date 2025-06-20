<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatriculaFicha extends Model
{
    protected $table = 'matriculas_fichas';
    protected $primaryKey = 'idmatriculas_fichas';
    public $timestamps = false;

    protected $fillable = ['fichas_idfichas', 'aprendices_idaprendices'];

    public function ficha() {
        return $this->belongsTo(Ficha::class, 'fichas_idfichas');
    }

    public function aprendiz() {
        return $this->belongsTo(Aprendiz::class, 'aprendices_idaprendices');
    }

    public function documentos() {
        return $this->hasMany(Documento::class, 'matriculas_fichas_idmatriculas_fichas');
    }
}
