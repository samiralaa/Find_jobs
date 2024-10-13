<?php

namespace App\Providers;

use App\Domain\Repositories\Categories\CategoryRepositoryInterface;
use App\Infrastructure\Repositories\EloquentCategoryRepository;
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

    }
}
