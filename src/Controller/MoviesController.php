<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies/{movie}', name: 'app_movies')]
    public function index($movie): JsonResponse
    {
        return $this->json([
            'message' => "Movie name: {$movie}",
            'path' => 'src/Controller/MoviesController.php',
        ]);
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
