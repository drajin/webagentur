<?php

namespace App\Providers;

use View;
use App\Post;
use Illuminate\Support\ServiceProvider;

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
//        view()->composer('layouts.frontend', function()
//        {
//            view()->share('latest_posts',Post::take(3)->latest()->get());
//        });
        try {
            $latest_posts = Post::take(4)->latest()->get();
            View::share('latest_posts', $latest_posts);

        }  catch (\Exception $e) {
            // do nothing
        }

    }
}
