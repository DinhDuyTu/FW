<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use Auth;

class CartController extends Controller
{
    private $categoryRepository;
    private $productRepository;
    private $imageRepository;
    private $orderRepository;
    private $orderdetailRepository;

    public function __construct (
        CategoryRepositoryInterface  $categoryRepository,
        ProductRepositoryInterface  $productRepository,
        ImageRepositoryInterface  $imageRepository,
        OrderRepositoryInterface  $orderRepository,
        OrderDetailRepositoryInterface  $orderdetailRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
        $this->orderRepository = $orderRepository;
        $this->orderdetailRepository = $orderdetailRepository;
    }

    public function index(Request $request)
    {
        $carts = unserialize($request->cookie('cart'));
        $total_price = 0;
        if ($carts != false) {
            foreach ($carts as $cart) {
                $total_price = $total_price + $cart['num_price'];
            }
        }
        return view('client.carts.cart', compact('carts', 'total_price'));
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->product_id;
        $product_num = $request->quantity;
        $size = $request->size;
        $color = $request->color;
        $cart = unserialize($request->cookie('cart'));
        if (isset($cart[$product_id]) && isset($cart[$size]) && isset($cart['color'])) {
            $product = $this->productRepository->find($product_id);
            // $qty = $product->quantity;
            $product_num = $product_num + $cart[$product_id.$size.$color]["product_num"];
            $cart[$request->product_id.$size.$color] = $this->getProductDetail($product_id, $product_num, $size, $color);
            $cookie = cookie('cart', serialize($cart), 60*30);
            $qty = count($cart);
        }
        else {
            $cart[$request->product_id.$size.$color] = $this->getProductDetail($product_id, $product_num, $size, $color);
            $cookie = cookie('cart', serialize($cart), 60*30);
            $qty = count($cart);
        }
        $total_price = $this->getTotalPrice($cart);

        return response()->json([
            'quantity' => $qty,
            'cart' => $cart,
            'total_price' => $total_price,
        ], 200)->withCookie($cookie);
    }

    public function getProductDetail($id, $num, $size, $color)
    {
        $product = $this->productRepository->find($id);
        $product_price = $product->price;
        if($product->price_sale <> 0){
            $product_price = $product->price_sale;
        }
        $num_price = $product_price * $num;
        $product_image = $this->imageRepository->getAll()->where('product_id', $id)->where('image_default', 1);
        foreach ($product_image as $key => $prd_image) {
            $image = $prd_image->image;
        }
        $product_detail = [
            'product_id' => $id,
            'product_name' => $product->name,
            'product_price' => $product_price,
            'product_num' => $num,
            'num_price' => $num_price,
            'product_image' => $image,
            'size' => $size,
            'color' => $color,
        ];

        return $product_detail;
    }

    public function showMiniCart(Request $request)
    {
        $cart = unserialize($request->cookie('cart'));
        
        return response()->json(['cart' => $cart], 200);
    }

    public function update(Request $request)
    {
        $product_id = $request->id;
        $product_num = $request->quantity;
        $color = $request->color;
        $size = $request->size;
        $cart = unserialize($request->cookie('cart'));
        $cart[$product_id.$size.$color]["product_num"] = $product_num;
        $product = $this->productRepository->find($product_id);
        $cart[$product_id.$size.$color]["num_price"] = $product_num * $cart[$product_id.$size.$color]["product_price"];
        $cookie = cookie('cart', serialize($cart), 60*30);
        $carts = unserialize($cookie->getValue());
        $total_price = $this->getTotalPrice($carts);
        $summedPrice = $cart[$product_id.$size.$color]["num_price"];

        return response()->json(compact('total_price', 'summedPrice'), 200)->withCookie($cookie);
    }

    public static function getTotalPrice($carts)
    {
        $total_price = 0;
        foreach ($carts as $cart)
        {
            $total_price += $cart["num_price"];
        }

        return $total_price;
    }

    public function delete(Request $request)
    {
        $product_id = $request->product_id;
        $cart = unserialize($request->cookie('cart'));
        if ($cart[$product_id]) {
            unset($cart[$product_id]);
        }
        $cookie = cookie('cart', serialize($cart), 60*30);
        $carts = unserialize($cookie->getValue());
        $quantity = count($carts);
        $total_price = $this->getTotalPrice($carts);

        return response()->json(compact('quantity', 'total_price'), 200)->withCookie($cookie);
    }

    public function checkout(Request $request)
    {
        if (Auth::check()) {
            $profile_guest = [
                'user_id' => Auth::user()->id,
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'address' => $request->get('address'),
                'note' => $request->get('note'),
            ];
            $cart = unserialize($request->cookie('cart'));
            $total_price = 0;
            foreach ($cart as $key => $val) {
                $total_price += $val["num_price"];
            }
            $profile_guest['total_price'] = $total_price;
            $order = $this->orderRepository->create($profile_guest);
            foreach ($cart as $value) {
                $attr = [
                    'product_id' => $value['product_id'],
                    'order_id' => $order->id,
                    'quantity' => $value['product_num'],
                    'price' => $value['product_price'],
                    'size' => $value['size'],
                    'color' => $value['color'],
                ];
                $this->orderdetailRepository->create($attr);
            }
            $cookie  = cookie('cart', null);

            return redirect()->back()->withCookie($cookie);
        }
    }

    public function support(Request $request)
    {
        $cart = unserialize($request->cookie('cart'));
        if ($cart != false) {
            $quantity = count($cart);
            $total_price = $this->getTotalPrice($cart);
        } else {
            $quantity = 0;
            $total_price = 0;
        }
        
        return response()->json(compact('quantity', 'total_price'), 200);
    }

    public function countMiniCart()
    {
        # code...
    }
}
