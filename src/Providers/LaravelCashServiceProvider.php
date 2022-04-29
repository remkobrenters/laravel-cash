<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Providers;

use Illuminate\Support\ServiceProvider;
use Webparking\LaravelCash\Console\Commands\ClearResponseFiles;

class LaravelCashServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerConfig();
        $this->registerCommands();
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/cash.php',
            'cash'
        );

        $this->publishes([
            __DIR__.'/../../config/cash.php' => config_path('cash.php'),
        ], 'cash');
    }

    private function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ClearResponseFiles::class,
            ]);
        }
    }
}
