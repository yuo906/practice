<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->get();
        dd($products);
        return view ('product.website', compact('products'));
    }

    // public function text()
    // {
    //     $search = Product::table('product_practices')
    //             ->select('name', 'desc')
    //             ->get();
    //     return view ('product.index', compact('search'));

    // }

    // 往使用者資訊頁
    public function user_info(Request $request)
    {
        // 法一
        // dd(Auth::user());
        // 法二
        // dd($request->user());
        // $user = Auth::user();
        $user = $request->user();
        return view('user_setting',compact('user'));
    }
}
