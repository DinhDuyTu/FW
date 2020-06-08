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
use App\Models\History;
use App\Models\Product;
use DB;

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
        // $categories = $this->categoryRepository->getAll();
        $categories = Category::latest()->with('products')->get();
        $categoriesBySearch = Category::latest()->with('products')->get();
        $list_products_history = array();
        if (Auth::check()) {
            $list_products_history = History::latest()
                                ->where('user_id', Auth::user()->id)
                                ->with('products')
                                ->get();
        }
        // dd($history);
        return view('client.products.list_product', compact('products', 'image_default', 'categories', 'list_products_history', 'categoriesBySearch'));
    }

    public function show($id)
    {
        try {
            $product = $this->productRepository->find($id);
            $image_product = $this->imageRepository->getAll()->where('product_id', $id);
            $image_default = $image_product->where('image_default', '1');
            $size_prd = $product->sizes()->get();
            $color_prd = $product->colors()->get();
            $categoriesBySearch = Category::latest()->with('products')->get();
            if (Auth::check()) {
                $user_id = Auth::user()->id;
                $wishlist = $this->wishlistRepository->getAll()->where('user_id', $user_id)->where('product_id', $id)->count();
            } else {
                $wishlist = 0;
            }

            return view('client.products.single_product', compact('product', 'image_product', 'image_default', 'size_prd', 'color_prd', 'wishlist', 'categoriesBySearch'));
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

    public function getProductByCategory(Request $request)
    {
        $list_products = $this->productRepository->getAll()->where('category_id', $request->category_id);
        $products = array();
        foreach ($list_products as $key => $product) {
            $products[$key]['id'] = $product->id;
            $products[$key]['category_id'] = $product->category_id;
            $products[$key]['name'] = $product->name;
            $products[$key]['price'] = $product->price;
            $products[$key]['price_sale'] = $product->price_sale;
            $image_product = $this->imageRepository->getAll()->where('image_default', 1)->where('product_id', $product->id);
            foreach ($image_product as $value) {
                $products[$key]['image'] = $value->image;
            }
        }

        return response()->json($products, 200);
    }

    public function searchByName(Request $request)
    {
        $search = $request->search;
        $category_id = $request->category_id;
        $image_default = $this->imageRepository->getAll()->where('image_default', '1');
        $categories = Category::latest()->with('products')->get();
        $categoriesBySearch = Category::latest()->with('products')->get();
        if ($category_id == 0) {
            $products = Product::where('name', 'like', "%$search%")->orWhere('price', 'like', "%$search%")->get();
        } else {
            $L_products = Product::where('name', 'like', "%$search%")->orWhere('price', 'like', "%$search%")->get();
            $products = $L_products->where('category_id', $category_id);
        }
        
        return view('client.products.list_product_search', compact('categories', 'products', 'image_default', 'categoriesBySearch'));
    }

    public function getProductByCategoryID(Request $request, $cat_id)
    {
        $category_id = $cat_id;
        $image_default = $this->imageRepository->getAll()->where('image_default', '1');
        $categories = Category::latest()->with('products')->get();
        $products = Product::where('category_id', $category_id)->get();

        return view('client.products.list_product_search', compact('categories', 'products', 'image_default'));
    }
}
