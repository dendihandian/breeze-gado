<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->only(Product::FILLABLE));
        return redirect()->back();
    }
    
    public function show(int $productId)
    {
        $product = Product::findOrFail($productId);
        return view('products.show', compact('product'));
    }
    
    public function edit(int $productId)
    {
        $product = Product::findOrFail($productId);
        return view('products.edit', compact('product'));
    }
    
    public function update(ProductRequest $request, int $productId)
    {
        Product::where('id', $productId)->update($request->only(Product::FILLABLE));
        return redirect()->back();
    }

    public function delete(int $productId)
    {
        return 'delete';
    }
}
