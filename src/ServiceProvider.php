<?php

/*
 * This file is part of ibrand/backend.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Store\Backend;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
    ];

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        if (file_exists($routes = __DIR__.'/Http/routes.php')) {
            $this->loadRoutesFrom($routes);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'store-backend');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')]);
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

}
