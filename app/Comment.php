<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //one-to-many inverse relationship to get the post that owns the comment
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
