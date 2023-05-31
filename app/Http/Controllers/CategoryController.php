<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index1(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}