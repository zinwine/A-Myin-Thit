<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'img',
        'slug',
        'user_id'
    ];
     public function comments(){
            return $this->morphMany('App\Comment','commendable');
        }
}
