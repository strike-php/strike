<?php

/** @var \Strike\Framework\Core\Application $app */
$app = require dirname(__DIR__) . '/bootstrap/app.php';

/** @var \Strike\Framework\Http\HttpKernel $kernel */
$kernel = $app->get(\Strike\Framework\Http\HttpKernel::class);

$response = $kernel->handle(\Symfony\Component\HttpFoundation\Request::createFromGlobals());

$response->send();

exit(0);
