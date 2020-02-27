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

        return view('admin.categories.index', compact('categories'));
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
    public function destroy($id)
    {
        try {
            $category = $this->categoryRepository->find($id);
            $category->delete();

            return redirect()->route('admin.categories.index');
        } catch (Exception $e) {
            return redirect()->back()->with($e->getMessage());
        }
    }
}
