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
}
