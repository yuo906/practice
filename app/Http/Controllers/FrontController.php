<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\OrderList;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->get();
        dd($products);
        return view('product.website', compact('products'));
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
        return view('user_setting', compact('user'));
    }

    public function user_info_update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => '必填',
            'name.max' => '字數過長',
        ]);
        // dd($request->validate([
        //     'name' => 'required|max:255',
        // ], [
        //     'name.required' => '必填',
        //     'name.max' => '字數過長',
        // ]));
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        // ]);

        // dd($validator->fails());
        // if($validator->fails()) {
        //     return redirect(route('userinfo'))->withErrors(['nameError' => '帳號名稱字數過多']);
        // }


        // 法一
        // dd(Auth::user());
        // 法二
        // dd($request->user());
        // $user = Auth::user();
        $user = $request->user();
        $user->update([
            'name' => $request->name,
        ]);
        return redirect(route('userinfo'));
    }


    public function product()
    {
        $products = Product::where('status', 1)->get();
        return view('frontProduct', compact('products'));
    }

    public function addcart(Request $request)
    {

        $request->validate([
            'qty' => 'required|min:1|numeric',
            'product_id' => 'required|exists:product_practices,id|numeric',
        ]);

        // 寫法一
        $oddCart = Cart::where('user_id', $request->user()->id)->where('product_id', $request->product_id)->first();
        if ($oddCart) {
            $cart = $oddCart->update([
                'qty' => $oddCart->qty + $request->qty,
            ]);
        } else {
            $cart = Cart::create([
                'product_id' => $request->product_id,
                'qty' => $request->qty,
                'user_id' => $request->user()->id,
            ]);
        }

        // 寫法二
        // $oddCart = Cart::updateOrCreate([
        //     'user_id' => $request->user()->id,
        //     'product_id' => $request->product_id,
        // ],[
        //     'qty'=>123,
        // ]);

        // dd('123');
        return (object)[
            'code' => $oddCart ? 1 : 0,
            'product_id' => $request->product_id,
        ];
    }

    public function order_list(Request $request)
    {
        $user = $request->user();
        $orders = OrderList::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        return view('checkout.user_order', compact('orders'));
    }

    public function order_list_detail(Request $request, $order_id)
    {
        $user = $request->user();
        $orders = OrderList::where('user_id', $user->id)->find($order_id);
        // dd($orders);

        return view('checkout.order_detail', compact('orders'));
    }

    public function back_to_pay(Request $request)
    {
        $request->validate([
            'orderId' => 'required|exists:order_lists,id'
        ]);

        $user = $request->user();
        $orders = OrderList::where('user_id', $user->id)->find($request->orderId);

        if ($orders) {
            if ($orders->status == 1) {

                return redirect(route('ecpay', ['order_id' => $request->orderId]));
            };
        } else {
            return redirect(route('user_orderlist'))->with(['msg' => '訂單不存在']);
        }
    }



    public function ec_pay(Request $request, $order_id)
    {
        $user = $request->user();
        $orders = OrderList::where('user_id', $user->id)->find($order_id);

        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        $shuffle = str_shuffle($string);

        if ($orders) {
            $data = (object) [
                'MerchantID' => '3002607',
                'MerchantTradeNo' => $orders->order_id . substr($shuffle, 0, 3),
                'MerchantTradeDate' => date('Y/m/d H:i:s'),
                'PaymentType' => 'aio',
                'TotalAmount' => $orders->total_price,
                'TradeDesc' => '線上購物網站',
                'ItemName' => 'shop',
                'ReturnURL' => route('ecpay.returnBack'),
                'ChoosePayment' => 'ALL',
                'CheckMacValue' => '',
                'EncryptType' => '1',
                'ClientBackURL' => url('/'),
                'IgnorePayment' => 'WebATM#CVS#BARCODE',

            ];
            // 測試用
            $hashKey = 'pwFHCqoQZGmho4w6';
            $hashIV = 'EkRm7iFT261dpevs';

            $step1 = "ChoosePayment={$data->ChoosePayment}&ClientBackURL={$data->ClientBackURL}&EncryptType={$data->EncryptType}&IgnorePayment={$data->IgnorePayment}&ItemName={$data->ItemName}&MerchantID={$data->MerchantID}&MerchantTradeDate={$data->MerchantTradeDate}&MerchantTradeNo={$data->MerchantTradeNo}&PaymentType={$data->PaymentType}&ReturnURL={$data->ReturnURL}&TotalAmount={$data->TotalAmount}&TradeDesc={$data->TradeDesc}";

            $step2 = "HashKey={$hashKey}&{$step1}&HashIV={$hashIV}";

            $step3 = urlencode($step2);
            $step4 = strtolower($step3);
            $step5 = hash('sha256', $step4);
            $step6 = strtoupper($step5);

            $data->CheckMacValue = $step6;

            return view('ecpay', compact('data'));
        } else {
            return redirect(url('/'));
        }
    }

    public function ec_pay_return(Request $request, $order_id)
    {
        // 綠界打不回來，因為我們是本地測試伺服器
        dd($request->all());
    }







    public function test(Request $request)
    {
        //取得session中key的資料(參數1=>自行設定的key,參數2=>假設沒有找到則使用預設資料)
        // $hasBeen = $request->session()->get('mytest','沒有去過step2');
        // 清除session中key的資料
        // $request->session()->forget('mytest');
        $phone = $request->session()->get('form_phone', '');
        return view('test', compact('phone'));
    }

    public function test1_store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
        ]);

        // 設置session中key的資料      key          value
        $request->session()->put('form_phone', $request->phone);
        return redirect(route('test.step2'));
    }

    public function test2(Request $request)
    {
        $phone = $request->session()->get('form_phone', '');
        return view('test2', compact('phone'));
    }
}
