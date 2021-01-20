<?php

namespace AmiPraha\WorkshopLaravelPackage\Http\Controllers;

class DemoController
{
    public function index()
    {
        return view('workshop-laravel-package::show', [
            'name' => config('workshop-laravel-package.name'),
        ]);
    }
}
