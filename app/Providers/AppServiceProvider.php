<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Intervention\Image\ImageManager;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ImageManager::class, function () {
            return new ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
        });
    }

    public function boot(): void
    {
        //
    }
}
