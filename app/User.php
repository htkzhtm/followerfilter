<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'twitter_id',
        'name',
        'screen_name',
        'description',
        'profile_image_url',
        'followers_count',
        'friends_count',
        'statuses_count',
    ];

    public function followers()
    {
        return $this->hasMany('App\Follower');
    }
}
