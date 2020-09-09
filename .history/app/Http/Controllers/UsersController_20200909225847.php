<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function show($user_id)
    {
        $user = User::where('id', $user_id)
            ->firstOrFail();

        //テンプレート「user/show.blade.php」を表示します。
        return view('user/show' . ['user' => $user]);
    }
}
