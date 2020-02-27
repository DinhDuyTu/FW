<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;

class CartController extends Controller
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

    public function addToCart(Request $request)
    {
        $product_id = $request->id;
        $product_num = $request->quantity;
        $cart = unserialize($request->cookie('cart'));
        if (isset ($cart[$product_id]) ) {
            $product = $this->productRepository->find($product_id);
            $qty = $product->quantity;
            $product_num = $product_num + $cart[$product_id]["product_num"];
                $cart[$request->product_id] = $this->getProductDetail($product_id, $product_num);
                $cookie = cookie('cart', serialize($cart), 60);
                $qty = count($cart);
        }
        else {
            $cart[$request->product_id] = $this->getProductDetail($product_id, $product_num);
            $cookie = cookie('cart', serialize($cart), 60);
            $qty = count($cart);
        }
        return response()->json([
            'quantity' => $qty,
            'cart' => $cart,
        ], 200)->withCookie($cookie);
    }

    public function getProductDetail($id, $num)
    {
        $product = $this->productRepository->find($id);
        $product_price = $product->price;
        if($product->price_sale <> 0){
            $product_price = $product->price_sale;
        }
        $num_price = $product_price * $num;
        $product_detail = [
            'product_id' => $id,
            'product_name' => $product->name,
            'product_price' => $product_price,
            'product_num' => $num,
            'num_price' => $num_price,
            'product_image' => $product->image,
        ];

        return $product_detail;
    }
}
