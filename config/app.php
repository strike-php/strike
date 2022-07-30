<?php

/** @var $env \Strike\Framework\Core\Environment\Environment */

return [
    'debug' => $env->get('APP_DEBUG', false),
    'timezone' => $env->get('APP_TIMEZONE', 'UTC'),

    'modules' => [
        \Strike\Framework\Cli\CliModule::class,
        \Strike\Framework\Http\Routing\RoutingModule::class,
        \Strike\Framework\Log\LoggingModule::class,
    ]
];

