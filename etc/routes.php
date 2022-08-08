<?php

use App\Http\Controller\ExampleController;
use Strike\Framework\Http\Routing\RouteRegistrar;

/** @var $routes RouteRegistrar */
$routes
    ->get('/', ExampleController::class)
    ->setName('example');
