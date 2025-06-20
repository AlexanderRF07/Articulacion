<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructores';
    protected $primaryKey = 'idinstructores';
    public $timestamps = false;

    protected $fillable = ['nombre', 'apellidos', 'user_iduser'];

    public function user() {
        return $this->belongsTo(User::class, 'user_iduser');
    }

    public function fichas() {
        return $this->hasMany(Ficha::class, 'instructores_idinstructores');
    }
}
