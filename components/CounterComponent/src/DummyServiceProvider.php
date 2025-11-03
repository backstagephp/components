<?php

namespace Backstage\Dummy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DummyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('dummy')
            ->hasViews();
    }

    public function boot()
    {
        $this->publishes([
            $this->package->basePath('/../resources/dummy') => resource_path("vendor/{$this->package->shortName()}"),
            $this->package->basePath('/../src/Components') => app_path("View/Components"),
        ], [
            "backstage-components-{$this->package->shortName()}",
        ]);
    }
}
