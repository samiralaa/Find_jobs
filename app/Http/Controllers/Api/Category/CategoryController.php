<?php

namespace App\Http\Controllers\Api\Category;

use App\Domain\Services\Categories\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catrgory\CreateCategoryRequest;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

class CategoryController extends Controller
{
    use ApiResponseTrait;
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        return $this->categoryService->getAll();
    }
    public function store(CreateCategoryRequest $request)
    {
        return $this->categoryService->create($request->all());
    }
    public function show($id)
    {
        return $this->categoryService->getById($id);
    }
    public function update(Request $request, $id)
    {
        return $this->categoryService->update($request->all(), $id);
    }
    public function destroy($id)
    {
        return $this->categoryService->delete($id);
    }
}
