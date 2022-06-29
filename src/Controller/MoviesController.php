<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        return $this->render('movies/index.html.twig');
    }
    
    /**
     * show
     *@Route("/show", name="old")
     * @return Response
     */
    public function show(): Response{
        return $this->render('index.html.twig', ["title" => "okokg"]);
    }
}
