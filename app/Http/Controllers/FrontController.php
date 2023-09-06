<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->get();
        dd($products);
        return view ('product.website', compact('products'));
    }

    public function text()
    {
        $search = Product::table('product_practices')
                ->select('name', 'desc')
                ->get();
        return view ('product.index', compact($search));

    }

}
