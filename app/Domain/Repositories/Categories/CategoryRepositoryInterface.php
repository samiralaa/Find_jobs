<?php
namespace App\Domain\Repositories\Categories;

interface CategoryRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function findById(int $id);
}