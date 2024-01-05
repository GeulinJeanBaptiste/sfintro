<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class RedirectionController extends AbstractController
{
    // #[Route('/redirection', name: 'app_redirection')]
    // public function index(): JsonResponse
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/RedirectionController.php',
    //     ]);
    // }
    #[Route('/redirection', name: 'app_redirection')]
    public function index(): RedirectResponse
    {
        // return $this->redirectToRoute('name', ['slug' => 'Jane Doe']);
        return $this->redirect('https://symfony.com/doc/current/controller.html');
    }
}
