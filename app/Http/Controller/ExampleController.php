<?php

namespace App\Http\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExampleController
{
    public function __invoke(Request $request): Response
    {
        return new JsonResponse(['it works!']);
    }
}
