<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainControlerController extends AbstractController
{
    #[Route('/main/controler', name: 'app_main_controler')]
    public function index(): Response
    {
        return $this->render('main_controler/index.html.twig');
    }
}
