<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Comment;

class CommentsController extends Controller
{
    public function store($id, Request $request)
    {
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'tweet_id' => $id,
            'text' => $request->text,
        ]);

        return redirect("tweets/{$comment->tweet->id}");
    }
}
