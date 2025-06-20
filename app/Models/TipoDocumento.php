<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'tiposdocumentos';
    protected $primaryKey = 'idtiposdocumentos';
    public $timestamps = false;

    protected $fillable = ['tiposdocumentos'];

    public function documentos() {
        return $this->hasMany(Documento::class, 'tiposdocumentos_idtiposdocumentos');
    }
}
