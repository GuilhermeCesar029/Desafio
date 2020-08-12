<?php

namespace Modules\Crud\Entities;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
    ];
}
