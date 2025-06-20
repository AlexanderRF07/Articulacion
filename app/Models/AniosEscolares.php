<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AniosEscolares extends Model
{
    protected $table = 'anios escolares';
    protected $primaryKey = 'idanios escolares';
    public $timestamps = false;

    protected $fillable = ['anios escolares'];

    public function fichas() {
        return $this->hasMany(Ficha::class, 'anios escolares_idanios escolares');
    }
}
