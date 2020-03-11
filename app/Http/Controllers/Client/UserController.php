<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;
    private $orderRepository;
    private $productRepository;
    private $imageRepository;

    public function __construct (
        UserRepositoryInterface  $userRepository,
        OrderRepositoryInterface  $orderRepository,
        ProductRepositoryInterface  $productRepository,
        ImageRepositoryInterface  $imageRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ];
        dd($attr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        return view('client.profiles.profile', compact('user'));
    }

    public function order_of_user($id)
    {
        if (Auth::user()->id == $id) {
            $user = $this->userRepository->find($id);
            $orders = $this->orderRepository->getAll()->where('user_id', $id);
            foreach ($orders as $key => $order) {
                $all_order = $order->orderDetails;
            }
            $orders_waiting = $orders->where('status', 0);
            foreach ($orders_waiting as $key => $waiting) {
                $order_waiting = $waiting->orderDetails;
            }
            $orders_shipping = $orders->where('status', 1);
            foreach ($orders_shipping as $key => $shipping) {
                $order_shipping = $shipping->orderDetails;
            }
            $orders_processed = $orders->where('status', 2);
            foreach ($orders_processed as $key => $processed) {
                $order_processed = $processed->orderDetails;
            }
            $products = $this->productRepository->getAll();
            $images = $this->imageRepository->getAll()->where('image_default', 1);

            return view('client.profiles.order', compact('user', 'all_order', 'order_waiting', 'order_shipping', 'order_processed', 'products', 'images'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
