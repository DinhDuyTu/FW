<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->getSubCategories(0);

        return view('admin.products.create', compact('categories'));
    }

    private function getSubCategories($parent_id, $ignore_id = null)
    {
        $categories = Category::where('parent_id', $parent_id)
            ->where('id', '<>', $ignore_id)
            ->get()
            ->map(function($query) use($ignore_id){
                $query->sub = $this->getSubCategories($query->id, $ignore_id);

                return $query;
            });

        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request);
        } else {
            $image = "/images/product/default.jpeg";
        }
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
        $attr['image'] = $image;
        Product::create($attr);
        
        return redirect()->route('admin.products.index');
    }

    private function uploadImage(Request $request)
    {
        $destinationDir = public_path('images/product');
        $fileName = uniqid('product') . '.' . $request->image->extension();
        $request->image->move($destinationDir, $fileName);

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
        $product = Product::findOrFail($id);
        $categories = $this->getSubCategories(0, $id);

        return view('admin.products.edit', compact('categories', 'product'));
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
        $product = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request);
        } else {
            $image = $product->image;
        }
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
        $attr['image'] = $image;
        $product = $product->update($attr);
        
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
