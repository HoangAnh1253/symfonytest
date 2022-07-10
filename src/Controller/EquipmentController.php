<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Equipment;
use App\Form\EquipmentType;
use App\Repository\CategoryRepository;
use App\Repository\EquipmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/equipments')]
class EquipmentController extends AbstractController
{

    private $equipmentRepository;
    private $categoryRepository;
    private $em;

    public function __construct(EquipmentRepository $equipmentRepository, CategoryRepository $categoryRepository, EntityManagerInterface $em)
    {
        $this->equipmentRepository = $equipmentRepository;
        $this->categoryRepository = $categoryRepository;
        $this->em = $em;
    }

    #[Route('/', name: 'app_equipment_index', methods: ['GET'])]
    public function index(): Response
    {
        $form = $this->createForm(EquipmentType::class);
        return $this->renderForm('equipment/index.html.twig', [
            'equipments' => $this->equipmentRepository->findAll(),
            'categories' => $this->categoryRepository->findAll(),
            'form' => $form
        ]);
    }

    #[Route('/category/{category}', name: 'app_equipment_filter_by_category', methods:['GET'])]
    public function filterByCategory(Category $category){
        return $this->render('equipment/index.html.twig', [
            'equipments' => $this->equipmentRepository->filterByCategory($category),
            'categories' => $this->categoryRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'app_equipment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EquipmentRepository $equipmentRepository): Response
    {
        $payload = $request->request->all();
        $isCsrfValid = $this->isCsrfTokenValid('add-item', $payload['token']);
        unset($payload['token']);
        $payload['category'] = $this->categoryRepository->find($payload['category']);  

        $equipment = new Equipment();
        $form = $this->createForm(EquipmentType::class, $equipment);
        $form->submit($payload);
       
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $isCsrfValid ) {
            $newEquipment = $form->getData();
            $this->em->persist($newEquipment);
            $this->em->flush();

            return $this->redirectToRoute('app_equipment_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/{id}', name: 'app_equipment_show', methods: ['GET'])]
    public function show(Equipment $equipment): Response
    {
        
            
        return $this->render('equipment/index.html.twig', [
            'equipments' => $this->equipmentRepository->findBy([ 'id' => $equipment->getId() ]),
            'categories' => $this->categoryRepository->findAll()
        ]);
    }

    #[Route('/api/{equipment}/edit', name: 'app_equipment_edit', methods: ['GET', 'POST', 'PATCH'])]
    public function edit(Request $request, Equipment $equipment): Response
    {
       
       try{
        $payload = $request->request->all();
        return $this->json([
            "a" =>$request
        ]);
        $form = $this->createForm(EquipmentType::class, $equipment);
       
        $form->submit($payload);
       
        $form->handleRequest($request);
       }catch(Exception $e){
        return $this->json([
            "a" =>$e->getMessage()
        ]);
       }
       
        if ($form->isSubmitted() && $form->isValid()) {
            $updateInfo = $form->getData();
            $equipment->setName($updateInfo->getName());
            $equipment->setDescription($updateInfo->getDescription());

            $this->em->persist($equipment);
            $this->em->flush();
            
            return $this->json($equipment->jsonSerialize());
        }
        return $this->json([
            "a" =>'a'
        ]);
    }

    #[Route('/{id}', name: 'app_equipment_delete', methods: ['POST'])]
    public function delete(Request $request, Equipment $equipment, EquipmentRepository $equipmentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipment->getId(), $request->request->get('_token'))) {
            $equipmentRepository->remove($equipment, true);
        }

        return $this->redirectToRoute('app_equipment_index', [], Response::HTTP_SEE_OTHER);
    }
}