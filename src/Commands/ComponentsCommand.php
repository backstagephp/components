<?php

namespace Backstage\Components\Commands;

use Illuminate\Console\Command;

class ComponentsCommand extends Command
{
    public $signature = 'backstage:component {component? : The component to use}';

    public $description = 'Publish a component';

    public function handle(): int
    {
        $component = $this->argument('component');

        if (! $component) {
            $component = $this->choice('Which component do you want to publish?', ['banner', 'breadcrumb', 'button', 'card', 'content', 'expander', 'footer', 'image', 'map', 'menu', 'open-graph-image', 'popup', 'slider']);
        }

        $this->info("Publishing component: {$component}");

        return Command::SUCCESS;
    }
}
