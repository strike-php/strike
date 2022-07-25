<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = (new \Strike\Framework\Core\AppFactory())
    ->withEnvFile(dirname(__DIR__) . '/.env')
    ->create(dirname(__DIR__));

return $app;
