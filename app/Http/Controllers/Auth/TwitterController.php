<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TwitterService;
use Illuminate\Support\Facades\Input;
use Socialite;

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
        $followers = $this->twitter->followers($user);
        return view('twitter.followers', ['followers' => json_encode($followers)]);
        // Auth::login($user);
        // return redirect('twitter/home');
    }

    public function logout()
    {
        // Auth::logout();
        return redirect('/');
    }
}
