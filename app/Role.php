<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    //many-to-many relationship using a pivot table role_user
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
