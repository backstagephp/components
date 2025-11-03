<?php

namespace Backstage\Components\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\ServiceProvider;

class ComponentsCommand extends Command
{
    public $signature = 'backstage:component {component? : The component to use}';

    public $description = 'Publish a component';

    public function handle(): int
    {
        $component = $this->argument('component');

        if (! $component) {

            $publishableGroups = ServiceProvider::$publishGroups;
            $keys = array_keys($publishableGroups);
            foreach ($keys as $key) {
                if (str_starts_with($key, 'backstage-components-')) {
                    $components[] = str_replace('backstage-components-', '', $key);
                }
            }
            $component = $this->choice('Which component do you want to publish?', $components);
        }

        $this->info("Publishing component: {$component}");
        $this->call('vendor:publish', [
            '--tag' => "backstage-components-{$component}",
        ]);

        return Command::SUCCESS;
    }
}
