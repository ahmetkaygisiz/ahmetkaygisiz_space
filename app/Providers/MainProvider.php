<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categories;
use View;

class MainProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
       
        
        View::composer('*', function($view){
            $categories = Categories::all();
            $view->with('categories', $categories);
        });
    }
}
