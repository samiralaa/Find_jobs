<?php

namespace App\Http\Controllers\Api\Company;

use App\Domain\Services\Companies\CompanyService;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use ApiResponseTrait;

    protected $companyService;
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index(Request $request)
    {
        $companies = $this->companyService->getAll($request->all());
        return $this->sucssessResponse($companies, 'Companies retrieved successfully') ?? $this->errorResponse('Companies not found');
    }

    public function show($id)
    {
        $company = $this->companyService->getById($id);
        return $this->sucssessResponse($company, 'Company retrieved successfully') ?? $this->errorResponse('Company not found');
    }

    public function store(Request $request)
    {
        $company = $this->companyService->create($request->all());
        return $this->sucssessResponse($company, 'Company created successfully') ?? $this->errorResponse('Company not created');
    }

    public function update(Request $request, $id)
    {
        $company = $this->companyService->update($request->all(), $id);
        return $this->sucssessResponse($company, 'Company updated successfully') ?? $this->errorResponse('Company not updated');
    }

    public function destroy($id)
    {
        $company = $this->companyService->delete($id);
        return $this->sucssessResponse($company, 'Company deleted successfully') ?? $this->errorResponse('Company not deleted');
    }
}
