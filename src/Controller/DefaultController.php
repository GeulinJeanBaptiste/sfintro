<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
    #[Route('/
    ', 'homepage')]
    public function index(): Response
    {
        return new Response('Hello World!');
    }
    #[Route('/number', 'number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        return new Response($number);
    }

    #[Route('/name/{slug}', 'name')]
    public function name(string $slug): Response
    {
        return new Response('Mon nom est : ' . $slug);
    }
}
