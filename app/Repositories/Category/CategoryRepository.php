<?php

namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;
use App\Models\Category;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    public function getSubCategories($parent_id, $ignore_id = null)
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
}
