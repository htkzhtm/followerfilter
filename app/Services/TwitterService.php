<?php

namespace App\Services;

use TwitterOAuth;
use Laravel\Socialite\One\User;

class TwitterService {

    private function oauth (User $user): TwitterOAuth
    {
        return new TwitterOAuth(
            env("TWITTER_CLIENT_KEY"),
            env("TWITTER_CLIENT_SECRET"),
            $user->token,
            $user->tokenSecret
        );
    }

    public function followers (User $user)
    {
        $twitter = $this->oauth($user);
        $users = get_object_vars($twitter->get('followers/list')) ["users"];

        $followers = [];
        $id = $user->id;
        foreach ($users as $user) {
            array_push($followers, [
                'twitter_id' => $user->id,
                'users_twitter_id' => $id,
                'name' => $user->name,
                'screen_name' => $user->screen_name,
                'description' => $user->description,
                'profile_image_url' => str_replace( "_normal.", "_400x400.", $user->profile_image_url_https),
                'followers_count' => $user->followers_count,
                'friends_count' => $user->friends_count,
                'statuses_count' => $user->statuses_count // ツイート数
            ]);
        }
        return $followers;
    }
}
