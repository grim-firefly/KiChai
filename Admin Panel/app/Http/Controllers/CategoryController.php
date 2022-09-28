<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }
    public function getAllCategory()
    {
        $categoyList = Category::all();
        return response()->json($categoyList,200);
    }
}
