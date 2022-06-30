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

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    #[Route('/movies')]
    public function index(): JsonResponse
    {
        
        $repository = $this->em->getRepository(Actor::class);
        $movies = $repository->findBy(['gender' => true], ['id' => 'desc']);
        dd($movies);
        return $this->json([
            'message' => "Movie name: {$movies}",
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