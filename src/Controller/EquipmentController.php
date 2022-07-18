<?php

namespace App\Controller;


use App\Entity\Category;
use App\Entity\Equipment;
use App\Entity\User;
use App\Service\CategoryService;
use App\Service\EquipmentService;
use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/equipments')]
class EquipmentController  extends AbstractController  implements  TokenAuthenticatedControllerr
{
    private $equipmentService;
    private $categoryService;
    private $userService;
   
    
    
    public function __construct(EquipmentService $equipmentService, CategoryService $categoryService, UserService $userService)
    {
        $this->equipmentService = $equipmentService;
        $this->categoryService = $categoryService;
        $this->userService = $userService;
    }

    #[Route('/', name: 'app_equipment_index', methods: ['GET'])]
    public function index(Request $request,): Response
    {

        $equipments = $this->equipmentService->getAllPaginate($request);

        $violations = $this->equipmentService->getViolations();

        $categories = $this->categoryService->getAll();

        $users = $this->userService->getAll();

        $errors = $this->equipmentService->getErrors();
       
        return $this->renderForm('equipment/index.html.twig', [
            'equipments' => $equipments,
            'categories' => $categories,
            'violations' => $violations,
            'users' => $users,
            'errors' => $errors
        ]);
    }

    #[Route('/category/{category}', name: 'app_equipment_filter_by_category', methods: ['GET'])]
    public function filterByCategory(Request $request, Category $category)
    {
        $equipments = $this->equipmentService->getWherePaginate($request, 'category', $category->getId());
         
        return $this->render('equipment/index.html.twig', [
            'equipments' => $equipments,
            'categories' => $this->categoryService->getAll()
        ]);
    }

    #[Route('/new', name: 'app_equipment_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $this->equipmentService->addEquipment($request);
        return $this->redirectToRoute('app_equipment_index', []);
    }
    

    #[Route('/{equipment}', name: 'app_equipment_show', methods: ['GET'])]
    public function show(Request $request, Equipment $equipment): Response
    {
        $equipment = $this->equipmentService->getWherePaginate($request, 'id', $equipment->getId());
        
        $categories = $this->categoryService->getAll();
        
        return $this->render('equipment/index.html.twig', [
            'equipments' => $equipment,
            'categories' => $categories
        ]);
    }

    #[Route('/api/{equipment}/edit', name: 'app_equipment_edit', methods: ['POST', 'PATCH'])]
    public function edit(Request $request, Equipment $equipment): Response
    {
        $response = $this->equipmentService->editEquipment($request, $equipment);
        return $this->json($response);
    }

    #[Route('/api/{equipment}/assign', name: 'app_equipment_assign', methods: ['POST', 'PATCH'])]
    public function assign(Request $request, Equipment $equipment){
        
        $response = $this->equipmentService->assignEquipment($request, $equipment);
        
        return $this->json($response);
    }

    #[Route('/api/{equipment}/unassign', name: 'app_equipment_unassign', methods: ['GET'])]
    public function unAssign(Equipment $equipment){
        
       $response = $this->equipmentService->unAssignEquipment($equipment);

       return $this->json($response);
    }


    #[Route('/{id}', name: 'app_equipment_delete', methods: ['DELETE', 'POST'])]
    public function delete(Request $request,  $id): Response
    {
        
        $this->equipmentService->deleteEquipment($request, $id);

        return $this->redirectToRoute('app_equipment_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/user/{id}', methods: ['GET'])]
    public function filterByUser(Request $request, User $user){

        $equipments = $this->equipmentService->getEquipmentOfUserPaginate($request, $user);

        $categories = $this->categoryService->getAll();

        return $this->render('equipment/index.html.twig', [
            'equipments' => $equipments,
            'categories' => $categories
        ]);
    }
    
}   