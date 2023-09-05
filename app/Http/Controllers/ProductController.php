<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('product.website');
    }

    public function cart()
    {
        $products = Product::get();
        return view ('product.orderList',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('product.orderList_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = Storage::putFile('public', $request->file('image'));
        // dd($request->all());
        Product::create([
            'name' => $request->name,
            'img_path' => str_replace('public','storage', $path),
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,

        ]);
        return redirect(route('product.cart'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
