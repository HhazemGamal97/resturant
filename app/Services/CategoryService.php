<?php

namespace App\Services;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
class CategoryService {

    public static function addCategory(StoreCategoryRequest $request){
        Category::create($request->all());
    }
}