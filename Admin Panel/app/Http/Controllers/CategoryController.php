<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

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
    public function getCategoryName(Request $request){
        $id=$request->id;
        // return response()->json($request);
        // return response()->json($id);
       $name= Category::where('id',$id)->get('name')->first();
       return response()->json($name,200);
    }

    public function updateCategoryInfo(Request $request){
        $id=$request->id;
        $newName=$request->name;
        $ctg=Category::where('id',$id)->update(['name'=>$newName]);
        if($ctg){
            return response()->json(['status'=>'success'],200);
        }
        return response()->json(['status'=>'failed'],200);
       
    }
}
