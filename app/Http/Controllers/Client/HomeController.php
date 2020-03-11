<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;

class HomeController extends Controller
{
    private $categoryRepository;
    private $productRepository;
    private $imageRepository;

    public function __construct (
        CategoryRepositoryInterface  $categoryRepository,
        ProductRepositoryInterface  $productRepository,
        ImageRepositoryInterface  $imageRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll()->where('parent_id', 0);
        $products = $this->productRepository->getAll();
        $images_defult = $this->imageRepository->getAll()->where('image_default', 1);
        return view('client.index', compact('categories', 'products', 'images_defult'));   
    }
}
