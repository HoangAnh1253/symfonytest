<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    private $repo;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $em->getRepository(Movie::class);
    }
    
    #[Route('/movies')]
    public function index(): Response
    {
        
        $repository = $this->em->getRepository(Movie::class);
        $movies = $repository->findAll();
       
        return $this->render('movies/index.html.twig', [
            'movies' => $movies
        ]);
    }
        
       
    // #[Route('/movies', name: 'app_movies')]
    // public function index(): Response
    // {
    // }

    
    /**
     * show
     *@Route("/show", name="old")
     * @return Response
     */
    #[Route('/movies/{movie}')]
    public function show(Movie $movie): Response{
        $movie = $this->repo->find($movie);
        return $this->render('movies/show.html.twig', ["movie" => $movie]);
    }
}