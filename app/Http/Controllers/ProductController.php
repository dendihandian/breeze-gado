<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        return 'store';
    }

    public function show($productId)
    {
        return view('products.show');
    }

    public function edit($productId)
    {
        return view('products.edit');
    }

    public function update(Request $request, $productId)
    {
        return 'update';
    }

    public function delete($productId)
    {
        return 'delete';
    }


    // misc
    public function factory($count)
    {
        Product::factory($count)->create();
        return redirect()->back();
    }
}
