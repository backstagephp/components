<?php

namespace Backstage\Components\Commands;

use Illuminate\Console\Command;

class ComponentsCommand extends Command
{
    public $signature = 'components:publish';

    public $description = 'Publish all components';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
