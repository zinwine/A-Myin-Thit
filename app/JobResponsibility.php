<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobResponsibility extends Model
{
    protected $fillable = [
        'responsibility',
        'career_id'
    ];
}
