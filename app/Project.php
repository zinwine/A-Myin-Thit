<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'category',
        'area',
        'floor',
        'elevator',
        'long_time',
        'corner',
        'desp',
        'img',
        'slug',
        'user_id'
    ];
}
