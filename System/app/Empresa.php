<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'Nombre', 'Email', 'Logo','Site'
    ];
}
