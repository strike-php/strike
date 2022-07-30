<?php

use Strike\Framework\Core\Exception\ExceptionBootstrapper;
use Strike\Framework\Core\ModuleBootstrapper;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new \Strike\Framework\Core\Application(
    basePath: dirname(__DIR__),
    bootstrappers: [
        (new \Strike\Framework\Core\Config\ConfigBootstrapper())->addDotEnvFile(dirname(__DIR__ . '/.secrets')),
        ExceptionBootstrapper::class,
        ModuleBootstrapper::class,
    ]
);

return $app;
