<?php

use Strike\Framework\Core\Application;
use Strike\Framework\Core\Config\ConfigBootstrapper;
use Strike\Framework\Core\Exception\ExceptionBootstrapper;
use Strike\Framework\Core\ModuleBootstrapper;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Application(
    basePath: dirname(__DIR__),
    bootstrappers: [
        (new ConfigBootstrapper())->addDotEnvFile(dirname(__DIR__ . '/.secrets')),
        ExceptionBootstrapper::class,
        ModuleBootstrapper::class,
    ]
);

return $app;
