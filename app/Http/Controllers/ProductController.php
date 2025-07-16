<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function withoutOptimization()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $categoryName = $product->category->name;
        }
        return "Without Optimization Completed";
    }

    // Function 2: With Eager Loading Optimization
    public function withEagerLoading()
    {
        $products = Product::with('category')->get(); 
        foreach ($products as $product) {
            $categoryName = $product->category->name;
        }
        return "With Eager Loading Completed";
    }

    // Function 3: Using Query Caching for Performance
    public function withQueryCaching()
    {
        // cache for 1 Hour
        $products = Cache::remember('products_with_category', 60 * 60, function () {
            return Product::with('category')->get();
        });

        foreach ($products as $product) {
            $categoryName = $product->category->name;
        }

        return "With Query Caching Completed";
    }
}
