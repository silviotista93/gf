<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre','apellidos','mensaje','email','telefono'
    ];
}
