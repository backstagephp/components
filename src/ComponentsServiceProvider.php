<?php

namespace Backstage\Components;

use Backstage\Components\Commands\ComponentsCommand;
use Illuminate\Foundation\Events\VendorTagPublished;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
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

    public function boot(): void
    {
        parent::boot();

        Event::listen(VendorTagPublished::class, function (VendorTagPublished $event) {
            \dump('VendorTagPublished event fired', [
                'tag' => $event->tag ?? null,
                'paths' => $event->paths ?? [],
            ]);
            Log::debug('VendorTagPublished event fired', [
                'tag' => $event->tag ?? null,
                'paths' => $event->paths ?? [],
            ]);
        });
    }
}
