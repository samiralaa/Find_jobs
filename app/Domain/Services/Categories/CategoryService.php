<?php

namespace App\Domain\Services\Categories;

use App\Domain\Repositories\Categories\CategoryRepositoryInterface;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository->all();
    }

    public function getById($id)
    {
        return $this->categoryRepository->findById($id);
    }
    public function create($data)
    {
        return $this->categoryRepository->create($data);
    }
    public function update($id, $data)
    {
        return $this->categoryRepository->update($id, $data);
    }
    public function delete($id)
    {
        return $this->categoryRepository->delete($id);
    }
}
