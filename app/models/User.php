<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'userimage',
        'api_key'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * get the roles a user might have
     */
    public function role()
    {
        return $this->belongsToMany('roles');
    }
}
