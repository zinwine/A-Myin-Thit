<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'desp',
        'location',
        'salary',
        'remark'
    ];
}
