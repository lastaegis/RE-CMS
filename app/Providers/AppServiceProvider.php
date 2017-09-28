<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Http\Repository\Contract\CountryInterface","App\Http\Repository\Implement\CountryRepository");
        $this->app->bind("App\Http\Repository\Contract\AccountInterface","App\Http\Repository\Implement\AccountRepository");
    }
}
