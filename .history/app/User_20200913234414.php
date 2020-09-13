<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //===== ここから =====
    //hasMany設定
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    //===== ここまでを追加 =====
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    //hasMany設定
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
