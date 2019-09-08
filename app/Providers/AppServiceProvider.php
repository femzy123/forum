<?php

namespace Forum\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Forum\Channel;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('channels', Channel::all());
    }
}
