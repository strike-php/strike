<?php

use Strike\Framework\Core\Application;
use Strike\Framework\Http\HttpKernel;
use Symfony\Component\HttpFoundation\Request;

/** @var Application $app */
$app = require dirname(__DIR__) . '/etc/bootstrap.php';

/** @var HttpKernel $kernel */
$kernel = $app->get(HttpKernel::class);

$response = $kernel->handle(Request::createFromGlobals());

$response->send();

exit(0);
