<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    protected $primaryKey = 'iddocumentos';
    public $timestamps = false;

    protected $fillable = [
        'Documento',
        'compromisoDeAprendiz',
        'tratamientoDeMenores',
        'certificadoEPS',
        'registroCivil',
        'url',
        'estado',
        'tiposdocumentos_idtiposdocumentos',
        'matriculas_fichas_idmatriculas_fichas'
    ];

    public function tipoDocumento() {
        return $this->belongsTo(TipoDocumento::class, 'tiposdocumentos_idtiposdocumentos');
    }

    public function matriculaFicha() {
        return $this->belongsTo(MatriculaFicha::class, 'matriculas_fichas_idmatriculas_fichas');
    }
}
