<?php

namespace App\Services;

use TwitterOAuth;
use Laravel\Socialite\One\User;

class TwitterService {

    public function oauth (User $user)
    {
        $twitter = new TwitterOAuth(
            env("TWITTER_CLIENT_KEY"),
            env("TWITTER_CLIENT_SECRET"),
            $user->token,
            $user->tokenSecret
        );

        echo('<pre>');
        var_dump(get_object_vars($twitter->get('account/verify_credentials')));
        echo('<pre>');

    }
}
