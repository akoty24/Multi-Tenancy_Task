<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function index()
        {
            $products = Product::all();
            return view('products.index', compact('products'));
        }

        public function create()
        {
            return view('products.create');
        }
    
        public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        // Create a new product with validated data
        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }
   
        public function show($id)
        {
            $product = Product::findOrFail($id);
            return view('products.show', compact('product'));
        }
        public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}
public function update(ProductRequest $request, $id)
{
    $validatedData = $request->validated();

    // Find the product by ID and update with validated data
    $product = Product::findOrFail($id);
    $product->update($validatedData);

    return redirect()->route('products.show', $id)->with('success', 'Product updated successfully!');
}

public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}