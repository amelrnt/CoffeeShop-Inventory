<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.table.products', compact('products'));
    }

    public function create()
    {
        return view('admin.form.products');
    }

    public function store(Request $request)
    {
        // Validate and save the new product data
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($data);

        return redirect()->route('products')->with('success', 'Product added successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate and update the product data
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update($data);

        return redirect()->route('products')->with('success', 'Product updated successfully.');
    }
}
