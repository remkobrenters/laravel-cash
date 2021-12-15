<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Webparking\LaravelCash\Providers\LaravelCashServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelCashServiceProvider::class,
        ];
    }
}
