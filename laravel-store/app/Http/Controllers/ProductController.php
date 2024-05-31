<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function singleProduct($id) {
        $singleProduct = Product::find($id);
        return view('singleProduct', ['singleProduct' => $singleProduct]);
    }
}
