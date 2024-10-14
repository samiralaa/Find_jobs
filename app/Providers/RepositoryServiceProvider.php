<?php

namespace App\Providers;

use App\Domain\Repositories\Categories\CategoryRepositoryInterface;
use App\Domain\Repositories\Companies\CompanyRepositoryInterface;
use App\Infrastructure\Repositories\Companies\EloquentCompanyRepository;
use App\Infrastructure\Repositories\EloquentCategoryRepository;
use App\Models\Company;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, EloquentCategoryRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class,EloquentCompanyRepository::class);
    }
}
