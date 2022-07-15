<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;

class CategoryService
{
    private $categoryRepository;
    
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll(){
        return $this->categoryRepository->findAll();
    }

    public function getAllQueryBuilder(Request $request){
        
    }

    public function getById($id){
        return $this->categoryRepository->find($id);
    }

    public function remove(Category $category){
        return $this->categoryRepository->remove($category);
    }
}