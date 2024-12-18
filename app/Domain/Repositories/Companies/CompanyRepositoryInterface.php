<?php
namespace App\Domain\Repositories\Companies;

interface CompanyRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

    public function find(int $id);
}