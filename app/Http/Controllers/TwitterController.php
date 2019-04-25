<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Follower;
use Auth;

class TwitterController extends Controller
{
    public function index(){
        return view('twitter.index');
    }

    public function list(){
        if (!Auth::check()) {
            return redirect('/');
        }
        $followers = Follower::where('users_twitter_id', Auth::user()->twitter_id)->get();

        return view('twitter.followers', ['followers' => $followers]);
    }
}
