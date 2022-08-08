<?php

/** @var $env \Strike\Framework\Core\Environment\Environment */

return [
    'commands' => [
        \Strike\Framework\Cli\Commands\ServeCommand::class,
        \Strike\Framework\Core\Config\Cli\ConfigCacheClearCommand::class,
    ]
];

