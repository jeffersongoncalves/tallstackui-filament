<?php

declare(strict_types = 1);

namespace TallStackUIFilament;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TallStackUIFilamentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tallstackuifilament')
            ->hasConfigFile()
            ->hasViews();
    }
}
