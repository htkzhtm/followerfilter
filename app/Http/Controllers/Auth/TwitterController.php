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

        $user = Socialite::driver('twitter')->user();
        echo('<pre>');
        var_dump($user);
        echo('<pre>');
        // Auth::login($user);
        return redirect('twitter/home');
    }

    public function logout()
    {
        // Auth::logout();
        return redirect('/');
    }
}
