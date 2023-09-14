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
        <form action="{{ route('user.pay_store') }}" method="POST">
            @csrf
            <label class="form-check-label w-100" for="flexRadioDefault1">
                <div class="border border-secondary-subtle p-3">
                    <div class="form-check">
                        <input name="pay" value="1" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                        <span>臨櫃匯款</span>
                        <p>0000-123456789-123456</p>
                        <p>007第一銀行</p>
                        <p>戶名:洪雋亞</p>
                        <p>匯款後請聯繫洪先生(0987877810)</p>
                        <p>請告知帳號後末五碼以便對帳</p>
                    </div>
                </div>
            </label>
            <label class="form-check-label w-100" for="flexRadioDefault2">
                <div class="border border-secondary-subtle p-3">
                    <div class="form-check">
                        <input name="pay" value="2" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        線上付款
                        <h6>本站線上付款為綠界金流</h6>
                    </div>
                </div>
            </label>
            <div class="d-flex justify-content-between w-100 p-3">
                <a href="{{ route('user.del') }}">
                    <button type="button" class="btn btn-outline-dark border-5" style="width: 100px">上一步</button>
                </a>

                <button type="submit" class="btn btn-outline-dark border-5" style="width: 100px">下一步</button>
            </div>
        </form>
    </div>
@endsection
