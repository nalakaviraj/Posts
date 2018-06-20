<?php

namespace App\Providers;

use \App\Billing\Stripe; 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{




    protected $defer=true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */



    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar',function($view)
        {

            $view->with('archives',\App\Post::archives());


 
        });
    }
 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // we use this register function to register things to service container
        
        $this->app->singleton(Stripe::class,function(){

    return new Stripe(config('services.stripe.secret'));


});

    }
}
