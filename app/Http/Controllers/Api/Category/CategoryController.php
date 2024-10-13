<?php

namespace App\Http\Controllers\Api\Category;

use App\Domain\Services\Categories\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        return $this->categoryService->getAll();
    }
    public function store(Request $request)
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
