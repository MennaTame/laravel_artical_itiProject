<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    
    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = ['address', 'password', 'fname', 'lname', 'email', 'image','birthday'];
    protected $hidden = ['password'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

}
