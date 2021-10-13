<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Product_category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    public function create()
    {
        $categories = Product_category::all();
        return view('products.create', compact('categories'));
    }

    public function store(CreateProductRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        } else $product->image = 'images/default.jpg';
        $product->save();
        return redirect()->route('products.index');
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('products.detail', compact('product'));
    }

    public function edit($id)
    {
        $categories = Product_category::all();
        $product = Product::findOrFail($id);
        return view('products.update', compact('product', 'categories'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $productSearch = $request->search;
        $products = Product::where('name', 'LIKE', "%$productSearch%")->get();
        return view('products.list', compact('products'));
    }
}
