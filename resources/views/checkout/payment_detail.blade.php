@extends('templates.template_website')
@section('main')
    <main class="container my-1">
        {{-- 分頁標籤 --}}
        <div>
            <span class="text-success">Home</span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <span class="text-success">Shop</span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <span class="text-muted">Shop Checkout</span>
        </div>

        {{-- 標題 --}}
        <div class="title py-4 mb-4 px-2 w-100">
            <h2 class="fw-medium w-50 bold">Checkout</h2>
            <div class="text-muted">Already have an account? Click here to
                <a href="{{ route('login') }}" class="text-success">Sign in</a>.
            </div>
        </div>

        {{-- 付款資訊 --}}
        <h4><i class="fa-light fa-location-dot px-3" style="color: #5c6c75;"></i>付款資訊</h4>
        <div>

            <label class="border rounded p-3 w-100" for="payment-1">
                <input type="radio" name="payment" id="payment-1">
                <span>臨櫃匯款</span>
                <div class="ps-3 text-muted">
                    <p>0000-123456789-123456</p>
                    <p>007-第一銀行</p>
                    <p>戶名:洪勝雅</p>
                    <p>匯款後請聯繫洪先生(0987877810)</p>
                    <p>請告知帳號末五碼以便對帳</p>
                </div>
            </label>

            <hr>
            <hr>

            {{-- <div class=""> --}}

            <label class="border rounded p-3 w-100" for="payment-2">
                <input type="radio" name="payment" id="payment-2">
                <span>線上付款</span>
                <div class="ps-3 text-muted">本站線上付款為綠界金流</div>
            </label>
            {{-- </div> --}}

        </div>

        {{-- 按鈕 --}}
        <div class="d-flex justify-content-between py-3">
            <a href="{{ route('checkout.delivery_detail') }}">
                <button type="button" class="btn btn-success">Back</button>
            </a>

            <a href="{{ route('checkout.order_complete') }}">
                <button type="button" class="btn btn-success">Next</button>
            </a>
        </div>
    </main>
@endsection
