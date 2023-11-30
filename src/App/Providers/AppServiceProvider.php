<?php

declare(strict_types=1);

namespace App\Providers;

use Google\Client as GoogleClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(GoogleClient::class, function () {
            return new GoogleClient(['client_id' => config('services.google.client_id')]);
        });
    }
}
