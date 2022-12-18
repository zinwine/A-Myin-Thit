<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'ph_no',
        'type',
        'message'
    ];
}
