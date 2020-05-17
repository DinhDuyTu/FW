<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Wishlist\WishlistRepositoryInterface;
use Auth;

class HomeController extends Controller
{
    private $categoryRepository;
    private $productRepository;
    private $imageRepository;
    private $wishlistRepository;

    public function __construct (
        CategoryRepositoryInterface  $categoryRepository,
        ProductRepositoryInterface  $productRepository,
        WishlistRepositoryInterface  $wishlistRepository,
        ImageRepositoryInterface  $imageRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
        $this->wishlistRepository = $wishlistRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll()->where('parent_id', 0);
        $products = $this->productRepository->getAll();
        $images_defult = $this->imageRepository->getAll()->where('image_default', 1);
        $products_sale = $products->where('price_sale', '<>', 0)->take(10);
        $featured_products = $products->where('is_highlight', '1')->take(10);
        $wishlists = $this->wishlistRepository->getAll()->where('user_id', Auth::user()->id);
        // dd($wishlist);

        return view('client.index', compact('categories', 'products', 'images_defult', 'products_sale', 'featured_products', 'wishlists'));   
    }
}
