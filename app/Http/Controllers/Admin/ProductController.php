<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $imageRepository;

    public function __construct (
        ProductRepositoryInterface  $productRepository,
        CategoryRepositoryInterface  $categoryRepository,
        ImageRepositoryInterface  $imageRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->imageRepository = $imageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->getLatest()->get();
        $images = $this->imageRepository->getAll()->where('image_default', '1');

        return view('admin.products.index', compact('products', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->getSubCategories(0);

        return view('admin.products.create', compact('categories'));
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
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'product_code' => $request->get('product_code'),
            'price' => $request->get('price'),
            'price_sale' => $request->get('price_sale'),
            'quantity' => $request->get('quantity'),
            'detail' => $request->get('detail'),
            'description' => $request->get('description'),
        ];
        if ($request->is_highlight == true) {
            $is_highlight = 1;
        } else {
            $is_highlight = 0;
        }
        $attr['is_highlight'] = $is_highlight;
        $product = $this->productRepository->create($attr);

        if ($request->hasFile('image')) {
            foreach ($request->image as $key => $value) {
                $image = $this->uploadImage($value);
                $attr = [
                    'product_id' => $product->id,
                    'image' => $image,
                ];
                $this->imageRepository->create($attr);
            }
        } else {
            $attr = [
                'product_id' => $product->id,
                'image' => "/images/product/default.jpeg",
            ];
            $this->imageRepository->create($attr);
        }
        $image_default = $this->imageRepository->getFirstImageByProduct($product->id);
        $attr = [
            'image_default' => '1',
        ];
        $image_default->update($attr);
        
        return redirect()->route('admin.products.index');
    }

    private function uploadImage($value)
    {
        $destinationDir = public_path('images/product');
        $fileName = uniqid('product') . '.' . $value->extension();
        $value->move($destinationDir, $fileName);

        return $image = "/images/product/" . $fileName;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        $categories = $this->categoryRepository->getSubCategories(0, $id);
        $images = $this->imageRepository->getAll()->where('product_id', $id);

        return view('admin.products.edit', compact('categories', 'product', 'images'));
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
        $product = $this->productRepository->find($id);
        $attr = [
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'product_code' => $request->get('product_code'),
            'price' => $request->get('price'),
            'price_sale' => $request->get('price_sale'),
            'quantity' => $request->get('quantity'),
            'detail' => $request->get('detail'),
            'description' => $request->get('description'),
        ];
        if ($request->is_highlight == true) {
            $is_highlight = 1;
        } else {
            $is_highlight = 0;
        }
        $attr['is_highlight'] = $is_highlight;
        $product->update($attr);
        if ($request->hasFile('image')) {
            $image_delete = $this->imageRepository->getAll()->where('product_id', $id);
            foreach ($image_delete as $img_del) {
                $img_del->delete();
            }
            foreach ($request->image as $key => $value) {
                $image = $this->uploadImage($value);
                $attr = [
                    'product_id' => $product->id,
                    'image' => $image,
                ];
                $this->imageRepository->create($attr);
            }
        }
        $image_default = $this->imageRepository->getFirstImageByProduct($id);
        $attr = [
            'image_default' => '1',
        ];
        $image_default->update($attr);
        
        return redirect()->route('admin.products.index');
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
