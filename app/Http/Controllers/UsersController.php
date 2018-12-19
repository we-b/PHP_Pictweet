<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tweet;

class UsersController extends Controller
{
    public function show($id)
    {
        $name = User::find($id)->name;
        $tweets = User::find($id)->tweets()->orderBy('created_at', 'DESC')->paginate(5);

        return view('users.show')->with(['name' => $name, 'tweets' => $tweets]);
    }
}
