<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Tweet;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = Auth::user();
        $tweets = Tweet::where('user_id', $user->id)->get();
        $tweets = Tweet::orderBy('created_at', 'DESC')->paginate(5);
        return view('users.show', compact('user', 'tweets'));
    }
}
