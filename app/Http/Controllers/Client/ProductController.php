<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Wishlist\WishlistRepositoryInterface;
use Auth;

class ProductController extends Controller
{
    private $categoryRepository;
    private $productRepository;
    private $imageRepository;
    private $wishlistRepository;

    public function __construct (
        CategoryRepositoryInterface  $categoryRepository,
        ProductRepositoryInterface  $productRepository,
        ImageRepositoryInterface  $imageRepository,
        WishlistRepositoryInterface  $wishlistRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
        $this->wishlistRepository = $wishlistRepository;
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
            $user_id = Auth::user()->id;
            $wishlist = $this->wishlistRepository->getAll()->where('user_id', $user_id)->where('product_id', $id)->count();

            return view('client.products.single_product', compact('product', 'image_product', 'image_default', 'size_prd', 'color_prd', 'wishlist'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
