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
use App\Repositories\Size\SizeRepositoryInterface;
use App\Repositories\Color\ColorRepositoryInterface;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $imageRepository;
    private $sizeRepository;
    private $colorRepository;

    public function __construct (
        ProductRepositoryInterface  $productRepository,
        CategoryRepositoryInterface  $categoryRepository,
        ImageRepositoryInterface  $imageRepository,
        SizeRepositoryInterface  $sizeRepository,
        ColorRepositoryInterface  $colorRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->imageRepository = $imageRepository;
        $this->sizeRepository = $sizeRepository;
        $this->colorRepository = $colorRepository;
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
        $sizes = $this->sizeRepository->getAll();
        $colors = $this->colorRepository->getAll();

        return view('admin.products.create', compact('categories', 'sizes', 'colors'));
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
        $product->sizes()->attach($request->sizes);
        $product->colors()->attach($request->colors);
        
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
        $sizes = $this->sizeRepository->getAll();
        $size_product = $product->sizes()->get();
        $colors = $this->colorRepository->getAll();
        $color_product = $product->colors()->get();

        return view('admin.products.edit', compact('categories', 'product', 'images', 'sizes', 'size_product', 'colors', 'color_product'));
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
        $product->sizes()->sync($request->sizes);
        $product->colors()->sync($request->colors);
        
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $id = $request->id;
            $product = $this->productRepository->find($id);
            $size_products = $product->sizes;
            foreach ($size_products as $key => $size_prd) {
                $size = $this->sizeRepository->find($size_prd->id);
                $size->delete();
            }
            $color_products = $product->colors;
            foreach ($color_products as $key => $color_prd) {
                $color = $this->colorRepository->find($color_prd->id);
                $color->delete();
            }
            $product->delete();

            return redirect()->route('admin.products.index');
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }
}
