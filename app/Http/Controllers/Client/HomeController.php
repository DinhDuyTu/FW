<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Wishlist\WishlistRepositoryInterface;
use Auth;
use App\Models\Category;

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
        $list_products = $this->productRepository->getAll();
        $images_defult = $this->imageRepository->getAll()->where('image_default', 1);
        $products_sale = $list_products->where('price_sale', '<>', 0)->take(10);
        $featured_products = $list_products->where('is_highlight', '1')->take(10);
        $categoriesBySearch = Category::latest()->with('products')->get();
        if (Auth::check()) {
            $wishlists = $this->wishlistRepository->getAll()->where('user_id', Auth::user()->id);
        } else {
            $wishlists = 0;
        }

        $products = array();
        foreach ($list_products as $key => $product) {
            $products[$key]['id']           = $product->id;
            $products[$key]['category_id']  = $product->category_id;
            $products[$key]['name']         = $product->name;
            $products[$key]['product_code'] = $product->product_code;
            $products[$key]['price']        = $product->price;
            $products[$key]['price_sale']   = $product->price_sale;
            $products[$key]['quantity']     = $product->quantity;
            $products[$key]['is_highlight'] = $product->is_highlight;
            $products[$key]['detail']       = $product->detail;
            $products[$key]['description']  = $product->description;
            if (Auth::check()) {
                $products[$key]['wishlist'] =   count($this->wishlistRepository
                                                     ->getAll()
                                                     ->where('user_id', Auth::user()->id)
                                                     ->where('product_id', $product->id));
            } else {
                $products[$key]['wishlist'] = 0;
            }
            
        }
        
        // dd($products);

        return view('client.index', compact('categories', 'products', 'images_defult', 'products_sale', 'featured_products', 'wishlists', 'categoriesBySearch'));   
    }
}
