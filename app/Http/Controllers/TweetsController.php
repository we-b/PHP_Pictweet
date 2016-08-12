<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();
        return view('tweets.index')->with('tweets', $tweets);
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        Tweet::create([
            'text' =>  $request->text,
            'image' => $request->image
        ]);

        return view('tweets.store');
    }

    public function edit($id)
    {
        $tweet = Tweet::find($id);
        return view('tweets.edit')->with('tweet', $tweet);
    }

    public function update($id, Request $request)
    {
        Tweet::find($id)->update([
            'text' => $request->text,
            'image' => $request->image
        ]);

        return view('tweets.update');
    }

    public function destroy($id)
    {
        Tweet::destroy($id);
        return view('tweets.destroy');
    }
}
