<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colorList = Color::with('brand')->get();
        return view('color.index', compact('colorList'));
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $Color = Color::find($id);
        return view('color.show', compact('Color'));
    }
    public function create()
    {
        $brandList=Brand::all();
        return view('color.create',compact('brandList'));
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $color = $request->color;
        $brand=$request->brand;
        Color::create([
            'name' => $name,
            'color' => $color,
            'brand_id'=>$brand
        ]);

        return redirect()->route('Color.Index')->withMessage('Color Added SuccessFully');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $brandList=Brand::all();
        $color = Color::where('id', $id)->get()->first();
        return view('Color.edit', compact('id', 'color','brandList'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $color = $request->color;
        $brand=$request->brand;
        Color::where('id', $id)->update([
            'name' => $name,
            'color' => $color,
            'brand_id'=>$brand
        ]);
        return redirect()->route('Color.Index')->withMessage('Color Updated SuccessFully');
    }
    public function delete($id)
    {
        $flag = Color::where('id', $id)->delete();
        return redirect()->route('Color.Index')->withMessage('Color Deleted SuccessFully');
    }
    public function getColorName(Request $request)
    {
        $id = $request->id;
        // return response()->json($request);
        // return response()->json($id);
        $name = Color::where('id', $id)->get('name')->first();
        return response()->json($name, 200);
    }

    public function updateColorInfo(Request $request)
    {
        $id = $request->id;
        $newName = $request->name;
        $ctg = Color::where('id', $id)->update(['name' => $newName]);
        if ($ctg) {
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['status' => 'failed'], 200);
    }
}
