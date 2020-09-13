<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 「１対１」→ メソッド名は単数形
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    // ==========ここから追加する==========
    //hasMany設定
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    // ==========ここまで追加する==========
    public function likedBy($user)
    {
        return Like::where('user_id', $user->id)->where('post_id', $this->id);
    }
}
