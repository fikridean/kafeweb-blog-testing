<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
  public function index()
  {
    return view('categories', [
      "title" => "All Categories with Titles",
      "categories" => Category::all()
    ]);
  }

  public function detail(Category $category)
  {
    return view('category', [
      "title" => $category->name,
      "posts" => $category->posts,
      "category" => $category->name
    ]);
  }
}
