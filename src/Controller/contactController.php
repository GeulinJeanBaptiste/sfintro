<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactController
{
    #[Route('/contact', 'contact')]
    public function contact(): Response
    {
        $contact = random_int(0, 50);
        return new Response('<html><body>QI de BEN CON : ' . $contact . '</body></html>');
    }
}
