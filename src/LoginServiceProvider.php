<?php

namespace yamesh\login;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');
        $this->publishes([__DIR__ . '/config/contact.php' => config_path('contact.php')]);
    }

    public function register() {
        
    }

}
