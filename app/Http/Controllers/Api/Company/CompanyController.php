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
        return $this->sucssessResponse($companies, 'Companies retrieved successfully');
    }


}
