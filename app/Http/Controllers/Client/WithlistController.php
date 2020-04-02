<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Wishlist\WishlistRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;
use Auth;

class WithlistController extends Controller
{
    private $wishlistRepository;
    private $productRepository;
    private $imageRepository;

    public function __construct (
        WishlistRepositoryInterface  $wishlistRepository,
        ProductRepositoryInterface  $productRepository,
        ImageRepositoryInterface  $imageRepository
    )
    {
        $this->wishlistRepository = $wishlistRepository;
        $this->productRepository = $productRepository;
        $this->imageRepository = $imageRepository;
    }

    public function index()
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $wishlists = $this->wishlistRepository->getAll()->where('user_id', $user_id);
            $products = $this->productRepository->getAll();
            $images = $this->imageRepository->getAll()->where('image_default', 1);
            
            return view('client.wishlists.wishlist', compact('wishlists', 'products', 'images'));
        } else {
            return redirect()->route('home');
        }
    }

    public function addToWithlist(Request $request)
    {   
        $status = "";
        $user_id = $request->user_id;
        $product_id =$request->product_id;
        $attr = [
            'user_id' => $user_id,
            'product_id' => $product_id,
        ];
        $count = $this->wishlistRepository->getAll()
            ->where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->count();
        $wishlistOfUser = $this->wishlistRepository->getAll()
            ->where('user_id', $user_id)
            ->count();
        if ($count < 1) {
            $this->wishlistRepository->create($attr);
            $status = "added";
            $wishlistOfUser++;
        } else {
            $wishlist = $this->wishlistRepository->getAll()
                ->where('user_id', $user_id)
                ->where('product_id', $product_id);
            foreach ($wishlist as $value) {
                $wishlist_id = $value->id;
            }
            $del_wishlist = $this->wishlistRepository->find($wishlist_id);
            $del_wishlist->delete();
            $status = "deleted";
            $wishlistOfUser--;
        }

        return response()->json(compact('status', 'wishlistOfUser'), 200);
    }

    public function delWishlist(Request $request)
    {
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $wishlist = $this->wishlistRepository->getAll()
            ->where('user_id', $user_id)
            ->where('product_id', $product_id);
        foreach ($wishlist as $value) {
            $wishlist_id = $value->id;
        }
        $del_wishlist = $this->wishlistRepository->find($wishlist_id);
        $del_wishlist->delete();

        return response()->json("", 200);
    }

    public function countWishlist()
    {
        if (Auth::user()) {
            $count = $this->wishlistRepository->getAll()->where('user_id', Auth::user()->id)->count();

            return response()->json(compact('count'), 200);
        } else {
            $count = 0;
            return response()->json(compact('count'), 200);
        }
        
    }
}
