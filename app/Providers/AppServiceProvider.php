<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Kode yang ditambahkan
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Kode yang ditambahkan
        Schema::defaultStringLength(191);
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
