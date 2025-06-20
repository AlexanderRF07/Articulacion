<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'iduser';
    public $timestamps = false;

    protected $fillable = ['tipoRol'];

    public function administrativo() {
        return $this->hasOne(Administrativos::class, 'user_iduser');
    }

    public function instructor() {
        return $this->hasOne(Instructor::class, 'user_iduser');
    }

    public function aprendiz() {
        return $this->hasOne(Aprendiz::class, 'user_iduser');
    }
}
