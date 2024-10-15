<?php

namespace App\Infrastructure\Repositories;
use App\Traits\CrudTrait;
use App\Models\Category;
use App\Domain\Repositories\Categories\CategoryRepositoryInterface;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    use CrudTrait;

    protected $model;

    public function __construct(Category $category)
    {
        $this->model = $category;
       
    }
    public function all()
    {
        return $this->getBySelect(['id', 'title']);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $attributes)
    {
        return Category::create($attributes);
    }

    public function update($id, array $attributes)
    {
        $category = $this->findById($id);
        $category->update($attributes);
        return $category;
    }

    public function delete($id)
    {
        $category = $this->findById($id);
        $category->delete();
        return $category;
    }
}
