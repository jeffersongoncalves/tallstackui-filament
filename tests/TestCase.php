<?php

declare(strict_types = 1);

namespace TallStackUIFilament\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TallStackUIFilament\TallStackUIFilamentServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            TallStackUIFilamentServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
}
