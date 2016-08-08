<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TweetsController extends Controller
{
    public function index()
    {
        // $wafu = DB::select('select * from tweets');
        // bar_dump($wafu);
        $hoge = array(1, 2, 3, 4, 5);
        return view('tweets.index')->with('hoge', $hoge);
    }
}
