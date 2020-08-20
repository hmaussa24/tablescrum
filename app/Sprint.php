<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    //
    protected $fillable = [
        'name', 'proyecto_id','inicio','fin','estado'
    ];
}
