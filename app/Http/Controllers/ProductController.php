<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
            'mrp' => 'required|numeric',
            'offer_percentage' => 'required|numeric',
            'final_price' => 'required|numeric',
            'manufactured_date' => 'required|date',
            'expiry_date' => 'required|date|after:manufactured_date',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
            'mrp' => 'required|numeric',
            'offer_percentage' => 'required|numeric',
            'final_price' => 'required|numeric',
            'manufactured_date' => 'required|date',
            'expiry_date' => 'required|date|after:manufactured_date',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
