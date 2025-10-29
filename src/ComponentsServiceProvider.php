<?php

namespace Backstage\Components;

use Backstage\Components\Commands\ComponentsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('components')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(ComponentsCommand::class);
    }
}
