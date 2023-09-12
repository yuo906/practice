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
        <span class="d-flex align-items-center"><img src="{{ asset('img/geo-alt.svg') }}" alt=""
                class="me-1">配送資訊</span>
        <form action="{{ route('user.del_store') }}" method="POST">
            @csrf
            <div class="border border-secondary-subtle p-3">
                <div class="input-group mb-2">
                    <input name="name" type="text" value="{{ $name }}" class="form-control" placeholder="收件者姓名" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-2">
                    <input name="add" type="text" value="{{ $add }}" class="form-control" placeholder="收件者地址" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                </div>
                <div class="input-group date mb-2" id="datepicker">
                    <input name="date" type="date" value="{{ $date }}" class="form-control" id="date" placeholder="">
                </div>
                <div class="input-group mb-2">
                    <input name="tel" type="number" value="{{ $tel }}" maxlength="10" class="form-control" placeholder="收貨者連絡電話" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                </div>
                <div class="input-group">
                    <input name="ps" type="text" value="{{ $ps }}" class="form-control" placeholder="備註" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="d-flex justify-content-between p-3">
                <a href="{{ route('user.check') }}">
                    <button type="button" class="btn btn-outline-dark border-5" style="width: 100px">上一步</button>
                </a>
                <button type="submit" class="btn btn-outline-dark border-5" style="width: 100px">下一步</button>
            </div>
        </form>
    </div>
@endsection
