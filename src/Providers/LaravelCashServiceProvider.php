<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelCashServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerConfig();
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/cash.php',
            'cash'
        );

        $this->publishes([
            __DIR__ . '/../../config/cash.php' => config_path('cash.php'),
        ], 'cash');
    }
}
