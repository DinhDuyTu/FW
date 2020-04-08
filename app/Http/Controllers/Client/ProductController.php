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
        $products = $this->productRepository->getAll()->take(18);
        $image_default = $this->imageRepository->getAll()->where('image_default', '1');

        return view('client.products.list_product', compact('products', 'image_default'));
    }

    public function show($id)
    {
        try {
            $product = $this->productRepository->find($id);
            $image_product = $this->imageRepository->getAll()->where('product_id', $id);
            $image_default = $image_product->where('image_default', '1');
            $size_prd = $product->sizes()->get();
            $color_prd = $product->colors()->get();
            if (Auth::check()) {
                $user_id = Auth::user()->id;
                $wishlist = $this->wishlistRepository->getAll()->where('user_id', $user_id)->where('product_id', $id)->count();
            } else {
                $wishlist = 0;
            }

            return view('client.products.single_product', compact('product', 'image_product', 'image_default', 'size_prd', 'color_prd', 'wishlist'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function quickView(Request $request)
    {
        $product_id = $request->id;
        $product = $this->productRepository->find($product_id);
        $name = $product->name;
        $price = $product->price;
        $price_sale = $product->price_sale;
        $image_product = $this->imageRepository->getAll()->where('product_id', $product_id);
        $image_default = $image_product->where('image_default', '1');
        $detail = $product->detail;
        $color_prd = $product->colors()->get();
        $size_prd = $product->sizes()->get();

        return response()->json(compact('name', 'price', 'price_sale', 'image_product', 'image_default', 'detail', 'color_prd', 'size_prd'), 200);
    }

    public function seeMore(Request $request)
    {
        $del = 0;
        $temp = $request->temp + 18;
        $count = $this->productRepository->getAll()->count();
        if ($temp != null) {
            $products = $this->productRepository->getAll()->take($temp);
            $image = $this->imageRepository->getAll()->where('image_default', '1');
            for ($i=0; $i < $temp-18; $i++) { 
                unset($products[$i]);
            }
            if ($temp >= $count) {
                $del = 1;
            }
        } else {
            $products = [];
        }

        return response()->json(compact('products', 'del', 'image'), 200);
    }
}
