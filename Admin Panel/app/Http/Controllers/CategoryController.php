<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class CategoryController extends Controller
{
    public function index()
    {
        $categoryList = Category::all();
        return view('category.index', compact('categoryList'));
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $category = $id;
        return view('category.show', compact('category'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
       $name=$request->category;
       Category::create(['name'=>$name]);

       return redirect()->route('Category.Index')->withMessage('Category Added SuccessFully');
    }
    public function edit(Request $request){
        $id=$request->id;
        $category= Category::where('id', $id)->get('name')->first();
        return view('category.edit',compact('id','category'));
    }
    public function update(Request $request){
        $id=$request->id;
        $name=$request->category;
        Category::where('id',$id)->update([
            'name'=>$name
        ]);
        return redirect()->route('Category.Index')->withMessage('Category Updated SuccessFully');

    }
    public function delete($id)
    {
        $flag = Category::where('id', $id)->delete();
        return redirect()->route('Category.Index')->withMessage('Category Deleted SuccessFully');
    }
    public function getCategoryName(Request $request)
    {
        $id = $request->id;
        // return response()->json($request);
        // return response()->json($id);
        $name = Category::where('id', $id)->get('name')->first();
        return response()->json($name, 200);
    }

    public function updateCategoryInfo(Request $request)
    {
        $id = $request->id;
        $newName = $request->name;
        $ctg = Category::where('id', $id)->update(['name' => $newName]);
        if ($ctg) {
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['status' => 'failed'], 200);
    }
}
