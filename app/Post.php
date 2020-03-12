<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    //one-to-many relationship with comments for the post
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
