<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index1(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store1(CategoryRequest $request, Category $category)
    {
        $input = $request['category'];
        $category->fill($input)->save();
        return redirect('/');
    }
}