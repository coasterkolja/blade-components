<?php

namespace Coasterkolja\BladeComponents\Commands;

use Illuminate\Console\Command;

class BladeComponentsCommand extends Command
{
    public $signature = 'blade-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
