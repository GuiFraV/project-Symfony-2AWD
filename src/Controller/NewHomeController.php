<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewHomeController extends AbstractController
{
    /**
     * @Route("/new/home", name="app_new_home")
     */
    public function index(): Response
    {
        return $this->render('new_home/index.html.twig', [
            'controller_name' => 'NewHomeController',
            'test' => 'Ceci est un message de test',
            'tableau' => [
                'test1' => 'Ceci est un message de test 1',
                'test2' => 'Ceci est un message de test 2',
                'test3' => 'Ceci est un message de test 3',
                'test4' => 'Ceci est un message de test 4',
            ],
        ]);
    }
}