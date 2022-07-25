<?php

/** @var $routes \Strike\Framework\Http\Routing\RouteRegistrar */

$routes
    ->get('/', \App\Http\Controller\ExampleController::class)
    ->setName('example');
