<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerApplyMessage extends Model
{
    protected $fillable = [
        'Name',
        'Email',
        'Address',
        'Ph_No',
        'Gender',
        'Job_Position',
        'Description',
        'Image'
    ];
}
