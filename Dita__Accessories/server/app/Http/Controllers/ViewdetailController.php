<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ViewdetailController extends Controller
{
    public function index()
    {
        return view('viewdetail');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        
        // Get related products (same category, excluding current product)
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();

        return view('viewdetail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function getProductImages($id)
    {
        $images = DB::table('product_images')
            ->where('product_id', $id)
            ->get();

        return response()->json($images);
    }
} 