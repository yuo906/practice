<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        return view('checkout.checkout_order_detail');
    }

    public function index_store(Request $request)
    {
        $request->validate([]);
    }

    public function delivery_detail()
    {
        return view('checkout.delivery_detail');
    }

    public function payment_detail()
    {
        return view('checkout.payment_detail');
    }

    public function order_complete()
    {
        return view('checkout.order_complete');
    }



    // 作業
    public function check(Request $request)
    {
        $carts = Cart::where('user_id', $request->user()->id)->get();
        $total = 0;
        foreach ($carts as $value) {
            $total += $value->product->price * $value->qty;
        }
        return view('checkout.checklist', compact('carts', 'total'));
    }




    public function changeQty(Request $request)
    {

        $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'qty' => 'required|min:1|numeric',
        ]);


        $cart = Cart::find($request->cart_id);

        $updateCart = $cart->update([
            'qty' => $request->qty,
        ]);

        $carts = Cart::where('user_id', $request->user()->id)->get();
        $total = 0;
        foreach ($carts as $value) {
            $total += $value->product->price * $value->qty;
        }

        // foreach ($request->all() as $key => $value) {

        //     $cart_id = explode("productQty", $key);

        //     if ($cart_id[0] != '_token') {
        //         dump($cart_id);
        //     }
        //     dd('123');
        //     $products = Cart::find($cart_id[1]);
        //     // dd($products);
        //     $products->update([
        //         'qty' => $request->productQty,
        //     ]);
        // };



        // 寫法一
        // $oddCart = Cart::where('user_id', $request->user()->id)->where('product_id', $request->product_id)->first();
        // if ($oddCart) {
        //     $cart = $oddCart->update([
        //         'qty' => $oddCart->qty + $request->qty,
        //     ]);
        // } else {
        //     $cart = Cart::create([
        //         'product_id' => $request->product_id,
        //         'qty' => $request->qty,
        //         'user_id' => $request->user()->id,
        //     ]);
        // }

        // return view('checkout.del-info');

        return (object)[
            'code' => $updateCart ? 1 : 0,
            'price' => ($cart->product?->price ?? 0) * $cart->qty,
        ];
    }

    public function del_info(Request $request)
    {
        //
        return view('/checkout/del-info');
    }

    public function pay_info(Request $request)
    {
        //
        return view('/checkout/pay-info');
    }

    public function thx(Request $request)
    {
        //
        return view('/checkout/thanks');
    }









    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


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
