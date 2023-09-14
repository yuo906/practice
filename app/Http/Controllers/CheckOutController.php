<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\OrderList;
use App\Models\OrderProduct;
use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Mail;
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

    public function checkDelCart(Request $request)
    {

        $request->validate([
            'cart_id' => 'required|exists:carts,id',
        ]);

        $cart = Cart::find($request->cart_id)->delete();

        $carts = Cart::where('user_id', $request->user()->id)->get();

        $total = 0;
        foreach ($carts as $value) {
            $total += $value->product->price * $value->qty;
        }

        return (object)[
            'code' => $cart ? 1 : 0,
            'id' => $request->cart_id,
            'total' => $total,
        ];
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
        $name = $request->session()->get('form_name', '');
        $add = $request->session()->get('form_add', '');
        $date = $request->session()->get('form_date', '');
        $tel = $request->session()->get('form_tel', '');
        $ps = $request->session()->get('form_ps', '');

        return view('checkout.del-info', compact('name', 'add', 'date', 'tel', 'ps'));
    }


    public function del_info_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'add' => 'required',
            'date' => 'required',
            'tel' => 'required|numeric',
            // 'ps' => 'required',
        ]);
        // dd($request);

        // 設置session中key的資料      key          value
        $request->session()->put('form_name', $request->name);
        $request->session()->put('form_add', $request->add);
        $request->session()->put('form_date', $request->date);
        $request->session()->put('form_tel', $request->tel);
        $request->session()->put('form_ps', $request->ps);
        // dd($request);

        return redirect(route('user.pay'));
    }



    public function pay_info(Request $request)
    {
        $pay = $request->pay;
        // dd($pay);
        return view('checkout.pay-info', compact('pay'));
    }

    public function pay_info_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pay' => 'required|numeric'
        ]);

        // 找購物車屬於使用者的資料
        $carts = Cart::where('user_id', $request->user()->id)->get();

        $todayOrderCount = OrderList::whereDate('created_at', today())->get()->count();

        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        $shuffle = str_shuffle($string);
        // 建立主表
        $order = OrderList::create([
            'order_id' => 'HW' . date("Ymd") . str_pad($todayOrderCount, 4, '0', STR_PAD_LEFT) . substr($shuffle, 0, 3),
            'user_id' => $request->user()->id,
            'name' => session()->get('form_name'),
            'address' => session()->get('form_add'),
            'date' => session()->get('form_date'),
            'tel_number' => session()->get('form_tel'),
            'ps' => session()->get('form_ps') ?? '',
            'pay' => $request->pay,
        ]);

        // 預設總價為0
        $total = 0;

        // 購物車有幾筆就執行幾次
        foreach ($carts as $value) {

            $total += $value->product->price * $value->qty;
            OrderProduct::create([
                'order_id' => $order->id,
                'img_path' => $value->product->img_path,
                'product_name' => $value->product->name,
                'price' => $value->product->price,
                'qty' =>$value->qty,
                'desc' => $value->product->desc,
            ]);

            $value->delete();
        }

        $order->update([
            'total_price' => $total,
        ]);

        session()->forget(['form_name', 'form_add', 'form_date', 'form_tel', 'form_ps', 'form_pay']);


        $orderData = [
            'name' => $request->user()->name,
            'order_id' => $order->order_id,
            'total_price' => $total,
        ];
        Mail::to($request->user()->email)->send(new OrderCreated($orderData));
        return redirect(route('user.thx'));
    }

    public function thx(Request $request)
    {
        //
        return view('checkout.thanks');
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
