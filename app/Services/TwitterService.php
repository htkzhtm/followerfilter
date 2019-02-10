<?php

namespace App\Services;

use TwitterOAuth;
use Laravel\Socialite\One\User;

class TwitterService {

    public function oauth (User $user) {
        echo('<pre>');
        var_dump($user);
        echo('<pre>');
    }
}
