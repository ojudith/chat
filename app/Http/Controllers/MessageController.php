<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function conversation($id)
    {
        $users = User::where('id', '!=', Auth::id())->get();
        $friendInfo = User::findOrFail($id);
        $myInfo = User::findOrFail(Auth::id());

        return view('messages.conversation')->with(
           [ 'users' => $users,
              'friendInfo' => $friendInfo,
              'myInfo' => $myInfo,
           ]

        );
    }
}
