<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::leftJoin('categories', 'products.category_id', '=', 'categories.id')->get(['products.id', 'products.title', 'products.image', 'categories.name as category', 'products.is_active']);
        return view('product.index', compact('productList'));
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $product = Product::where('id', $id)->get()->first();
        return view('product.show', compact('product'));
    }
    public function generatePDF($id)
    {
        $product = Product::where('id', $id)->get()->first();

        $pdf = PDF::loadView('product.pdf', compact('product'));

        return $pdf->download('info.pdf');
    }
    public function create()
    {
        $categoryList = Category::all(['id', 'name']);
        return view('product.create', compact('categoryList'));
    }
    public function store(ProductRequest $request)
    {
        //    $name=$request->category;
        $path = $request->file('product_img')->store('public/products');
        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'is_active' => $request->is_active ? true : false,
            'image' => basename($path)
        ]);
        return redirect()->route('Product.Index')->withMessage('Product Added SuccessFully');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $product = Product::where('id', $id)->get()->first();
        $categoryList = Category::all(['id', 'name']);

        return view('product.edit', compact('id', 'product', 'categoryList'));
    }
    public function update(ProductRequest $request)
    {
        $id = $request->id;
        $product = Product::where('id', $id)->get()->first();
        $image = $product->image;
        if ($request->file('product_img')) {
            $deleted = Storage::delete('public/products/' . $image);
            $path = $request->file('product_img')->store('public/products');
            $image = basename($path);
        }
        Product::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'is_active' => $request->is_active ? true : false,
            'image' => $image
        ]);
        return redirect()->route('Product.Index')->withMessage('Product Updated SuccessFully');
    }
    public function delete($id)
    {
        // dd('wow'.$deleted);
        $flag = Product::where('id', $id)->get()->first();
        $deleted = Storage::delete('public/products/' . $flag->image);
        $flag->delete();
        return redirect()->route('Product.Index')->withMessage('Product Deleted SuccessFully');
    }
    public function getCategoryName(Request $request)
    {
        $id = $request->id;
        // return response()->json($request);
        // return response()->json($id);
        $name = Product::where('id', $id)->get('name')->first();
        return response()->json($name, 200);
    }

    public function updateCategoryInfo(Request $request)
    {
        $id = $request->id;
        $newName = $request->name;
        $ctg = Product::where('id', $id)->update(['name' => $newName]);
        if ($ctg) {
            return response()->json(['status' => 'success'], 200);
        }
        return response()->json(['status' => 'failed'], 200);
    }
}
