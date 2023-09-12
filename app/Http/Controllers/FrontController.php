<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
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
        if($oddCart){
            $cart = $oddCart->update([
                'qty'=>$oddCart->qty+ $request->qty,
            ]);
        }else {
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
            'product_id' =>$request->product_id,
        ];
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
