<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class TwitterController extends Controller
{
    public function login(){
        return Socialite::driver('twitter')->redirect();
    }

    public function auth(){
        // Auth::login($user);
        return redirect('/');
    }

    public function logout()
    {
        // Auth::logout();
        return redirect('/');
    }
}
