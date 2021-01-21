<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ShopProvider
 * @package App\Providers
 */
class ShopProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
