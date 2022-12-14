<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $labList=Lab::all();
        return view('lab.index', compact('labList'));
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $lab = Lab::where('id', $id)->get()->first();
        return view('lab.show', compact('lab'));
    }
    public function create()
    {
        return view('lab.create');
    }
    public function store(Request $request)
    {
        //    $name=$request->category;
        Lab::create([
            'lab_no' => $request->lab_no,
            'no_of_pc' => $request->no_of_pc,
            'capacity' => $request->capacity,
            'type' => $request->type,
        ]);
        return redirect()->route('Lab.Index')->withMessage('Lab Added SuccessFully');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $lab = Lab::where('id', $id)->get()->first();

        return view('lab.edit', compact('lab'));
    }
    public function update(Request $request)
    {
        $id = $request->id;       
        Lab::where('id', $id)->update([
            'lab_no' => $request->lab_no,
            'no_of_pc' => $request->no_of_pc,
            'capacity' => $request->capacity,
            'type' => $request->type,
        ]);
        return redirect()->route('Lab.Index')->withMessage('Lab Updated SuccessFully');
    }
    public function delete($id)
    {
        $flag = Lab::where('id', $id)->delete();
        return redirect()->route('Lab.Index')->withMessage('Lab Deleted SuccessFully');
    }
    public function getCategoryName(Request $request)
    {
        $id = $request->id;
        // return response()->json($request);
        // return response()->json($id);
        $name = Lab::where('id', $id)->get('name')->first();
        return response()->json($name, 200);
    }

    public function updateCategoryInfo(Request $request)
    {
        $id = $request->id;
        $newName = $request->name;
        $ctg = Lab::where('id', $id)->update(['name' => $newName]);
        if ($ctg) {
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['status' => 'failed'], 200);
    }
}
