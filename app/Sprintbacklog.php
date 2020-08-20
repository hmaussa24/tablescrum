<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprintbacklog extends Model
{
    //
    protected $fillable = [
        'horas', 'estado','user_id','backlog_id'
    ];
}
