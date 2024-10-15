<?php

namespace App\Infrastructure\Repositories;

use App\Models\Category;
use App\Domain\Repositories\Categories\CategoryRepositoryInterface;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    
    public function all()
    {
        return Category::all()
        ->select('id', 'title', 'description');
    }

    public function findById($id)
    {
        return Category::find($id);
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
