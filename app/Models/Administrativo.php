<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $table = 'administrativos';
    protected $primaryKey = 'idadministradores';
    public $timestamps = false;

    protected $fillable = ['nombres', 'apellidos', 'user_iduser'];

    public function user() {
        return $this->belongsTo(User::class, 'user_iduser');
    }
}
