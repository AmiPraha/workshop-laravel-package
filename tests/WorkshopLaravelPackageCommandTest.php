<?php

namespace AmiPraha\WorkshopLaravelPackage\Tests;

use AmiPraha\WorkshopLaravelPackage\Commands\WorkshopLaravelPackageCommand;

class WorkshopLaravelPackageCommandTest extends TestCase
{
    /** @test */
    public function it_can_run_command()
    {
        $this->artisan(WorkshopLaravelPackageCommand::class)
            ->assertExitCode(0)
            ->expectsOutput('All done John Doe');
    }

    /** @test */
    public function it_will_gree_other_persons()
    {
        $name = 'Dorian Bartsch';

        config()->set('workshop-laravel-package.name', $name);

        $this->artisan(WorkshopLaravelPackageCommand::class)
            ->assertExitCode(0)
            ->expectsOutput("Hey {$name}");
    }
}
