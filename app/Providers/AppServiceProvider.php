<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepository;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
        
        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->singleton(
            ImageRepositoryInterface::class,
            ImageRepository::class
        );

        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
