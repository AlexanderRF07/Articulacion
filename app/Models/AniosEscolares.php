<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AniosEscolares extends Model
{
 protected $table = 'anios_escolares';
    protected $primaryKey = 'idanios_escolares';

    protected $fillable = ['anios_escolares'];

    public function fichas()
    {
        return $this->hasMany(Ficha::class, 'anios_escolares_idanios_escolares');
    }
}
