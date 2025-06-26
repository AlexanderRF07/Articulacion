<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposDocumento extends Model
{ protected $table = 'tiposdocumentos';
    protected $primaryKey = 'idtiposdocumentos';

    protected $fillable = ['tiposdocumentos'];

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'tiposdocumentos_idtiposdocumentos');
    }
}
