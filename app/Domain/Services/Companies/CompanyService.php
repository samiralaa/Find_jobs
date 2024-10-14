<?php

namespace App\Domain\Services\Companies;

use App\Domain\Repositories\Companies\CompanyRepositoryInterface;

class CompanyService
{
    protected $companyRepository;
    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }
    public function getAll()
    {
        return $this->companyRepository->all();
    }
    public function getById($id)
    {
        return $this->companyRepository->find($id);
    }
    public function create($data)
    {
        return $this->companyRepository->create($data);
    }
    public function update($id, $data)
    {
        return $this->companyRepository->update($id, $data);
    }
    public function delete($id)
    {
        return $this->companyRepository->delete($id);
    }
}
