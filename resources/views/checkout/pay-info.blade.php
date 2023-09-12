@extends('templates.template_website')
@section('main')
    <div class="container d-flex flex-column p-3 gap-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-success">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-success">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop Checkout</li>
            </ol>
        </nav>
        <h3 class="fw-bolder">Checkout</h3>
        <p>Already have an account? Click here to <a href="">Sign in</a>.</p>
        <span class="d-flex align-items-center"><i class="bi bi-wallet me-2"></i>付款資訊</span>
        <div class="border border-secondary-subtle p-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    臨櫃匯款
                </label>
                <p>0000-123456789-123456</p>
                <p>007第一銀行</p>
                <p>戶名:洪雋亞</p>
                <p>匯款後請聯繫洪先生(0987877810)</p>
                <p>請告知帳號後末五碼以便對帳</p>
            </div>
        </div>
        <div class="border border-secondary-subtle p-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    線上付款
                </label>
                <h6>本站線上付款為綠界金流</h6>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('user.del') }}"><button class="btn btn-outline-dark border-5"
                    style="width: 100px">上一步</button></a>
            <a href="{{ route('user.thx') }}"><button class="btn btn-outline-dark border-5"
                    style="width: 100px">下一步</button></a>
        </div>
    </div>
@endsection
