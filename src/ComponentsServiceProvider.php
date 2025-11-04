<?php

namespace Backstage\Components;

use Backstage\Components\Commands\ComponentsCommand;
use Illuminate\Foundation\Events\VendorTagPublished;
use Illuminate\Support\Facades\Event;
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

        $this->setUpEvents();

    }

    private function setUpEvents(): void
    {
        Event::listen(VendorTagPublished::class, function (VendorTagPublished $event) {
            foreach ($event->paths ?? [] as $path) {
                if (! is_dir($path)) {
                    continue;
                }

                $iterator = new \RecursiveIteratorIterator(
                    new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS)
                );

                foreach ($iterator as $file) {
                    if (! $file->isFile() || $file->getExtension() !== 'php') {
                        continue;
                    }

                    $filePath = $file->getRealPath();
                    $content = file_get_contents($filePath);

                    $pattern = '/namespace Backstage\\\\Components\\\\[^\\\\]+\\\\Components/';
                    $replacement = 'namespace App\\View\\Components';

                    $newContent = preg_replace($pattern, $replacement, $content);

                    if ($newContent !== $content) {
                        file_put_contents($filePath, $newContent);
                    }
                }
            }
        });
    }
}
