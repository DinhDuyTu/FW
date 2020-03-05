<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;

class ProductController extends Controller
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
        return view('client.products.list_product');
    }

    public function show($id)
    {
        try {
            $product = $this->productRepository->find($id);
            $image_product = $this->imageRepository->getAll()->where('product_id', $id);
            $image_default = $image_product->where('image_default', '1');
            $size_prd = $product->sizes()->get();
            $color_prd = $product->colors()->get();

            return view('client.products.single_product', compact('product', 'image_product', 'image_default', 'size_prd', 'color_prd'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
