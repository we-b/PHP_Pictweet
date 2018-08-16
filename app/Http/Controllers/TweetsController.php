<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use Auth;

class TweetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index()
    {
        $tweets = Tweet::with('user')->orderBy('created_at', 'DESC')->paginate(5);
        return view('tweets.index')->with('tweets', $tweets);
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        Tweet::create(
            array(
                'name' => $request->name,
                'image' => $request->image,
                'text' => $request->text,
                'user_id' => Auth::user()->id,
            )
        );

        return view('tweets.store');
    }
}
