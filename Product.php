<?php

// controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        // Validate input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
        ]);

        // Create product
        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }
}
