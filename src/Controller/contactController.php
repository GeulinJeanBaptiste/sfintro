<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    #[Route('/contact', 'contact')]
    public function index(): Response
    {
        $contact = random_int(0, 50);
        // return new Response('<html><body>QI de BEN CON : ' . $contact . '</body></html>');
        return $this->render('contact/index.html.twig');
    }
}
