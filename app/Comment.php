<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = [
        'content',
        'user_id',
        'commendable_id',
        'commendable_type'
    ];

    public function commendable()
    {
        return $this->morphTo();
    }
}
