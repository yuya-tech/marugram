<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Auth;
use Validator;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {
        // Commentモデル作成
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        // 「/」 ルートにリダイレクト
        return redirect('/');
    }
}
