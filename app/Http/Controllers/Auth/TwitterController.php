<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TwitterService;
use Illuminate\Support\Facades\Input;
use Auth;
use Socialite;
use App\User;
use App\Follower;

class TwitterController extends Controller
{

    protected $twitter;

    public function __construct(TwitterService $twitter) {
        $this->twitter = $twitter;
    }

    public function login()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function auth()
    {
        $user = Socialite::driver('twitter')->user();

        $account = User::where('twitter_id', $user->id)->first();

        if (!$account) {
            $account = User::create([
                'twitter_id' => $user->id
            ]);
        }
        Auth::login($account);

        
        $followers = $this->twitter->followers($user);

        // とりあえず今は許す（動かしたいので）
        Follower::where('users_twitter_id', Auth::user()->twitter_id)->delete();
        Follower::insert($followers);

        return redirect('/follower');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
