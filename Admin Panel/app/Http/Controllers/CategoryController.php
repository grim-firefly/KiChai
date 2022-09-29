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
    public function deleteCategory(Request $request){
        $id=$request->id;
       $flag= Category::where('id',$id)->delete($id);
       if($flag){
            return response()->json(['status'=>'success'],200);
       }
       return response()->json(['status'=>'failed'],502);

    }
}
