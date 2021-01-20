<?php

namespace AmiPraha\WorkshopLaravelPackage\Commands;

use Illuminate\Console\Command;

class WorkshopLaravelPackageCommand extends Command
{
    public $signature = 'workshop-laravel-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done ' . config('workshop-laravel-package.name'));
    }
}
