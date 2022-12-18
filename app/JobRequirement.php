<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequirement extends Model
{
    protected $fillable = [
        'requirement',
        'career_id'
    ];
}
