<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TwitterService;

class TwitterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('TwitterService', function () {
            return new TwitterService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
