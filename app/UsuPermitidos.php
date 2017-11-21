<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuPermitidos extends Model
{
    protected $fillable = [
        'nombre', 'permiso',
    ];
}
