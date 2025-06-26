<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrativos extends Model
{
    protected $table = 'administrativos';
    protected $primaryKey = 'idadministrativos';
    public $timestamps = false;

    protected $fillable = ['nombres', 'apellidos'];

    
}