@extends('templates.template_website')
@section('main')
    <main class="container my-1">
        {{-- 分頁標籤 --}}
        <div>
            <span class="text-success">Home</span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <span class="text-success">Shop</span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <span class="text-muted">Shop Checkout</span>
        </div>

        <div class="m-auto py-5" style="width: 120px;">
            感謝您的購買~~
        </div>

        {{-- 按鈕 --}}
        <div class="d-flex justify-content-center py-3">
            <a href="{{ url('/') }}" class="me-5">
                <button type="button" class="btn btn-success">回首頁</button>
            </a>

            <a href="">
                <button type="button" class="btn btn-success">查看訂單</button>
            </a>
        </div>
    </main>
@endsection
