<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use Image;

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
        $image = $request->file('product_img');
        $newName = date('y-m-d') . '_' . time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('product_storage');
        $img = Image::make($image->getRealPath())->resize(200, 200)->save($destination . '/' . $newName);

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'is_active' => $request->is_active ? true : false,
            'image' => $newName
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
            $image = $request->file('product_img');
            $newName = date('y-m-d') . '_' . time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('product_storage');
            $img = Image::make($image->getRealPath())->resize(200, 200)->save($destination . '/' . $newName);
            $image = $newName;
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
    public function trashproduct()
    {
        $productList = Product::onlyTrashed()->leftJoin('categories', 'products.category_id', '=', 'categories.id')->get(['products.id', 'products.title', 'products.image', 'categories.name as category', 'products.is_active']);
        return view('product.trash', compact('productList'));
    }
    public function deleteForce($id)
    {
        $flag = Product::onlyTrashed()->where('id', $id)->get()->first();
        $deleted = Storage::delete('public/products/' . $flag->image);
        $flag->forceDelete();
        return redirect()->route('Product.Trash')->withMessage('Product Deleted permanently');
    }
    public function restoreProduct($id)
    {
        $flag = Product::onlyTrashed()->where('id', $id)->get()->first();
        $flag->restore();
        return redirect()->route('Product.Trash')->withMessage('Product Restored Successfully');

    }
}
