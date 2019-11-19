<?php
# @Date:   2019-11-08T17:38:21+00:00
# @Last modified time: 2019-11-08T18:42:36+00:00




namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 

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
        { Schema::defaultStringLength(191); }
    }
}
