<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Equipment;
use App\Entity\User;
use App\Form\EquipmentType;
use App\Helper\DataValidateHelper;
use App\Repository\AssignRepository;
use App\Repository\CategoryRepository;
use App\Repository\EquipmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/equipments')]
class EquipmentController extends AbstractController
{

    private $equipmentRepository;
    private $categoryRepository;
    private $assignRepository;
    private $em;
    private $validator;
    private $session;
    
    
    public function __construct(RequestStack $session, AssignRepository $assignRepository, EquipmentRepository $equipmentRepository, CategoryRepository $categoryRepository, EntityManagerInterface $em, ValidatorInterface $validator, )
    {
        $this->equipmentRepository = $equipmentRepository;
        $this->categoryRepository = $categoryRepository;
        $this->em = $em;
        $this->validator = $validator;
        $this->session = $session->getSession();
        $this->assignRepository = $assignRepository;
    }

    #[Route('/', name: 'app_equipment_index', methods: ['GET'])]
    public function index(Request $request,PaginatorInterface $paginator): Response
    {
        $queryBuilder = $this->equipmentRepository->getAllQueryBuilder();
        $equipments = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
       

        $violations =  $this->session->get('violations');
        $violations = DataValidateHelper::correctViolationsMessage($violations);
      
        $this->session->set('violations', null);
        return $this->renderForm('equipment/index.html.twig', [
            'equipments' => $equipments,
            'categories' => $this->categoryRepository->findAll(),
            'violations' => $violations
        ]);
    }

    #[Route('/category/{category}', name: 'app_equipment_filter_by_category', methods: ['GET'])]
    public function filterByCategory(Request $request,Category $category, PaginatorInterface $paginator)
    {
        $queryBuilder = $this->equipmentRepository->findWithFieldQueryBuilder('category', $category->getId());
        $equipments =   $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
         
        return $this->render('equipment/index.html.twig', [
            'equipments' => $equipments,
            'categories' => $this->categoryRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'app_equipment_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $payload = $request->request->all();
       
        $isCsrfValid = $this->isCsrfTokenValid('add-item', $payload['token']);
        unset($payload['token']);
        $payload['category'] = $this->categoryRepository->find($payload['category']);
        
        $equipment = new Equipment();
        $form = $this->createForm(EquipmentType::class, $equipment);
        $form->submit($payload);

        if ($form->isSubmitted() && $isCsrfValid) {
            $violations = $this->validator->validate($equipment);
            if(count($violations) >0)
            {
                $this->session->set('violations',$violations);
            }else{
                $this->em->persist($equipment);
                $this->em->flush();
            }
            return $this->redirectToRoute('app_equipment_index', []);
        }
    }

    #[Route('/{id}', name: 'app_equipment_show', methods: ['GET'])]
    public function show(Request $request, Equipment $equipment, PaginatorInterface $paginator): Response
    {
        $queryBuilder = $this->equipmentRepository->findWithFieldQueryBuilder('id', $equipment->getId());
        $equipment =   $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
        

        return $this->render('equipment/index.html.twig', [
            'equipments' => $equipment,
            'categories' => $this->categoryRepository->findAll()
        ]);
    }

    #[Route('/api/{equipment}/edit', name: 'app_equipment_edit', methods: ['POST', 'PATCH'])]
    public function edit(Request $request, Equipment $equipment): Response
    {

        try {
            $payload = json_decode($request->getContent(), true);
            $payload['category'] = $equipment->getCategory();
        
            $form = $this->createForm(EquipmentType::class, $equipment);
            $form->submit($payload);
            
            if ($form->isSubmitted()) {
                $this->em->persist($equipment);
                $this->em->flush();
                return $this->json($equipment->jsonSerialize());
            }
            
        } catch (Exception $e) {
            return $this->json([
                "error" => $e->getMessage()
            ]);
        }
    }

    #[Route('/{id}', name: 'app_equipment_delete', methods: ['DELETE', 'POST'])]
    public function delete(Request $request, Equipment $equipment, EquipmentRepository $equipmentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            $equipmentRepository->remove($equipment, true);
        }

        return $this->redirectToRoute('app_equipment_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/user/{id}', methods: ['GET'])]
    public function filterByUser(Request $request, User $user,  PaginatorInterface $paginator){
        $queryBuilder = $this->equipmentRepository->findEquipmentWithUserQueryBuilder($user);
        $equipments = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('equipment/index.html.twig', [
            'equipments' => $equipments ,
            'categories' => $this->categoryRepository->findAll()
        ]);
    }
}