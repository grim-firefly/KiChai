<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brandList = Brand::all();
        return view('brand.index', compact('brandList'));
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $Brand = Brand::find($id);
        return view('brand.show', compact('Brand'));
    }
    public function create()
    {
        return view('Brand.create');
    }
    public function store(Request $request)
    {
       $name=$request->category;
       Brand::create(['name'=>$name]);

       return redirect()->route('Brand.Index')->withMessage('Brand Added SuccessFully');
    }
    public function edit(Request $request){
        $id=$request->id;
        $brand= Brand::where('id', $id)->get('name')->first();
        return view('Brand.edit',compact('id','brand'));
    }
    public function update(Request $request){
        $id=$request->id;
        $name=$request->category;
        Brand::where('id',$id)->update([
            'name'=>$name
        ]);
        return redirect()->route('Brand.Index')->withMessage('Brand Updated SuccessFully');

    }
    public function delete($id)
    {
        $flag = Brand::where('id', $id)->delete();
        return redirect()->route('Brand.Index')->withMessage('Brand Deleted SuccessFully');
    }
    public function getBrandName(Request $request)
    {
        $id = $request->id;
        // return response()->json($request);
        // return response()->json($id);
        $name = Brand::where('id', $id)->get('name')->first();
        return response()->json($name, 200);
    }

    public function updateBrandInfo(Request $request)
    {
        $id = $request->id;
        $newName = $request->name;
        $ctg = Brand::where('id', $id)->update(['name' => $newName]);
        if ($ctg) {
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['status' => 'failed'], 200);
    }
}
