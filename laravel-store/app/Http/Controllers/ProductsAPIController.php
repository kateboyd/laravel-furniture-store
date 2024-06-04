<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsAPIController extends Controller
{

public function index()
{
    $products = Product::with(['category', 'tags'])->get();

    return response()->json([
        'message' => 'Products retrieved successfully',
        'success' => true,
        'data' => $products
    ]);
}

    public function create(Request $request)
    {
        $product = new Product();

        $product->price = $request->price;
        $product->related = $request->related;
        $product->category_id = $request->category_id;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->depth = $request->depth;
        $product->stock = $request->stock;
        $product->color = $request->color;

        $product->save();

        return response()->json([
            'message' => 'Product added to the db',
            'success' => true,
        ]);
    }
}
