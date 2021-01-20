<?php

namespace AmiPraha\WorkshopLaravelPackage\Tests\Http\Controllers;

use AmiPraha\WorkshopLaravelPackage\Tests\TestCase;

class DemoControllerTest extends TestCase
{
    /** @test */
    public function it_can_render_demo_page()
    {
        $this->get('demo')
            ->assertSuccessful()
            ->assertSee(config('workshop-laravel-package.name'));
    }
}
