<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.adminProducts', compact('products'));
    }

    public function show(Product $product) {
        return view('ProductPage', compact('product'));
    }

    public function create() {
        return view('product.create');
    }

    public function store() {
        $data = request()->validate([
           'subcategory_id' => 'string',
           'name' => 'string',
           'image' => 'string',
           'price' => 'string',
           'description' => 'string'
        ]);
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function edit(Product $product) {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product) {
        $data = request()->validate([
            'subcategory_id' => 'string',
            'name' => 'string',
            'image' => 'string',
            'price' => 'string',
            'description' => 'string'
        ]);
        $product -> update($data);
        return redirect()->route('product.index');
    }

    public function destroy(Product $product){
        $product -> delete();
        return redirect() -> route('product.index');
    }
}
