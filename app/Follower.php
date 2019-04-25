<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
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

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
