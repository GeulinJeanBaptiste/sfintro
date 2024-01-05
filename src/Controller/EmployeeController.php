<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    #[Route('/employee', name: 'app_employee')]
    public function index(): Response
    {
        $employees = [

            [
                'Name' => 'Jane Doe',
                'Age' => 34,
                'Email' => 'johndoe@me.com',
            ],
            [
                'Name' => 'john Doe2',
                'Age' => 45,
                'Email' => 'johndoe2@me.com',
            ],
            [
                'Name' => 'john Doe3',
                'Age' => 57,
                'Email' => 'johndoe3@me.com',
            ]
        ];
        return $this->render('employee/index.html.twig', [
            'employees' => $employees, 'title' => 'Liste des employés',
        ]);
    }
}
