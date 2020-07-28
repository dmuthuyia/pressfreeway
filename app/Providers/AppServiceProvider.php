<?php

namespace pressfreeway\Providers;

use Illuminate\Support\ServiceProvider;
use pressfreeway\Article;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.nyumbaMonday', function ($view) {
            $articles = Article::orderBy('created_at', 'desc')->take(2)->get();

            $view->with(['articles' => $articles]);
        });

        view()->composer('layouts.nyumbaTuesday', function ($view) {
            $articles = Article::all();

            $view->with(['articles' => $articles]);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
