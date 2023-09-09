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

        {{-- 配送資訊 --}}
        <h4><i class="fa-light fa-location-dot px-3" style="color: #5c6c75;"></i>配送資訊</h4>
        <div>
            <div class="border rounded p-3">
                <div class="mb-3">
                    <input type="text" placeholder="收件者姓名" class="form-control" aria-label="Sizing example input">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="收件者地址" class="form-control" aria-label="Sizing example input">
                </div>
                <div class="mb-3">
                    <input type="date" placeholder="年/月/日" class="form-control" aria-label="Sizing example input">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="收件者聯絡電話" class="form-control" aria-label="Sizing example input">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="備註" class="form-control" aria-label="Sizing example input">
                </div>
            </div>

        </div>

        {{-- 按鈕 --}}
        <div class="d-flex justify-content-between py-3">
            <a href="{{ route('checkout.index') }}">
                <button type="button" class="btn btn-success">Back</button>
            </a>

            <a href="{{ route('checkout.payment_detail') }}">
                <button type="button" class="btn btn-success">Next</button>
            </a>
        </div>
    </main>
@endsection
