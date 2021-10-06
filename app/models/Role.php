<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    /**
     * get the users with this role
     */
    public function users()
    {
        return $this->belongsToMany('roles');
    }
}
