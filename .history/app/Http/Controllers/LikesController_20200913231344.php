<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;

class LikesController extends Controller
{
    //
    public function store(Request $request)
    {
        // Likeモデル作成
        $like = new Like;
        $like->post_id = $request->post_id;
        $like->user_id = Auth::user()->id;
        $like->save();

        // 「/」 ルートにリダイレクト
        return redirect('/');
    }
}
