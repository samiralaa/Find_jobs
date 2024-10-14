<?php

namespace App\Infrastructure\Repositories\Companies;

use App\Models\Company;
use App\Domain\Repositories\Companies\CompanyRepositoryInterface;

class EloquentCompanyRepository implements CompanyRepositoryInterface
{
    public function all()
    {
        return Company::all();
    }

    public function find(int $id)
    {
        return Company::find($id);
    }

    public function create(array $data)
    {
        return Company::create($data);
    }

    public function update(int $id, array $data)
    {
        $company = Company::find($id);
        $company->update($data);
        return $company;
    }

    public function delete(int $id)
    {
        $company = Company::find($id);
        $company->delete();
        return $company;
    }
}
