<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        
       
   
    #[Route('/movies/create')]
    public function create(Request $request){
        $movie = new Movie();
        $movie->setTitle('ấdasdasdasda');
        $movie->setReleaseYear(2000);
        $form = $this->createForm(MovieFormType::class, $movie);
        $form->handleRequest($request);
        
        return $this->renderForm('movies/create.html.twig',[
            'form' => $form
        ]);
    }

    
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