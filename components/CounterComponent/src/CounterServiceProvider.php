<?php

namespace Backstage\Counter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CounterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('counter')
            ->hasViews();
    }

    public function boot()
    {
        $this->publishes([
            $this->package->basePath('/../resources/counter') => resource_path("views/components/{$this->package->shortName()}"),
            $this->package->basePath('/../src/Components') => app_path('View/Components'),
        ], [
            "backstage-components-{$this->package->shortName()}",
        ]);
    }
}
