<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //===== ここから =====
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //===== ここまでを追加 =====
    //hasMany設定
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
