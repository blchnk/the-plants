<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryPageController extends Controller
{
    public function index() {
    }

    public function show(Subcategory $subcategory) {
        $products = Product::where('subcategory_id', $subcategory->id)->get();
//        dd($products);
        return view('SubcategoryPage', compact('products', 'subcategory'));
    }
}
