<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct (
        CategoryRepositoryInterface  $categoryRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryRepository->getSubCategories(0);
        $categories_children = $this->categoryRepository->getAll()->where('parent_id', '<>', 0);

        return view('admin.categories.index', compact('categories', 'categories_children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->getSubCategories(0);

        return view('admin.categories.create', compact('categories'));
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
            'parent_id' => $request->get('parent_id'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ];
        $this->categoryRepository->create($attr);

        return redirect()->route('admin.categories.index');
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
        try {
            $category = $this->categoryRepository->find($id);
            $categories = $this->categoryRepository->getSubCategories(0, $id);

            return view('admin.categories.edit',compact('categories','category'));
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
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
        try {
            $category = $this->categoryRepository->find($id);
            $attr = [
                'parent_id' => $request->get('parent_id'),
                'name' => $request->get('name'),
                'description' => $request->get('description'),
            ];
            $category->update($attr);

            return redirect()->route('admin.categories.index');
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
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
            $category = $this->categoryRepository->find($id);
            $category_children = $this->categoryRepository->getAll()->where('parent_id', $category->id);
            $count = count($category_children);
            if ($count > 0) {
                foreach ($category_children as $key => $cat_children) {
                    $children = $this->categoryRepository->find($cat_children->id);
                    $children->delete();
                }
            }
            $category->delete();

            return response()->json(compact('children'), 200);
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }
}
