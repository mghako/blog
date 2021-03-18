<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\View;
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

        // View::share('categories', Category::orderBy('name', 'asc')->get());
        
        View::composer(['front.posts.index', 'front.posts.show', 'contact'], function ($view) {
            $view->with('categories', Category::orderBy('name', 'asc')->get());
        });

    }
}
