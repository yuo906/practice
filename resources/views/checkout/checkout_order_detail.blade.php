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

        {{-- 商品列表 --}}
        <form action="" method="POST">
            @csrf
            <div>
                <div class="order-details-head border rounded-top">
                    <div class="p-3">Order Details</div>
                </div>
                <div class="order-details-body">
                    <div class="p-3 d-flex justify-content-between align-items-center border">
                        <div class="d-flex align-items-center">
                            <div>
                                <img style="width:150px;" src="{{ asset('image/product-img-1.jpg') }}" alt="">
                            </div>
                            <div>
                                <div class="product-name">Cadbury 5 Star Chocolate</div>
                                <div class="product-desc text-muted">1kg</div>
                            </div>
                        </div>
                        <div>$15.00</div>
                    </div>
                    <div class="p-3 d-flex justify-content-between align-items-center border">
                        <div class="d-flex align-items-center">
                            <div>
                                <img style="width:150px;" src="{{ asset('image/product-img-2.jpg') }}" alt="">
                            </div>
                            <div>
                                <div class="product-name">Cadbury 5 Star Chocolate</div>
                                <div class="product-desc text-muted">1kg</div>
                            </div>
                        </div>
                        <div>$15.00</div>
                    </div>
                </div>
                <div
                    class="order-details-footer d-flex justify-content-between align-items-center p-3 border rounded-bottom">
                    <div>Subtotal</div>
                    <div>$30.00</div>
                </div>
            </div>
        </form>

        {{-- 按鈕 --}}
        <div class="d-flex justify-content-end py-3">
            <a href="{{ route('checkout.delivery_detail') }}">
                <button type="button" class="btn btn-success">Next</button>
            </a>
        </div>
    </main>
@endsection
