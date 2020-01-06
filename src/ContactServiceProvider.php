<?php

namespace Mustafa\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceprovider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'first-package');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'first-package');
        $this->publishes([__DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }

    public function register()
    {
    }
}
