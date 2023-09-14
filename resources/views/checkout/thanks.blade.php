@extends('templates.template_website')
@section('main')
    <div class="container-sm d-flex flex-column p-3 gap-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-success">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-success">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop Checkout</li>
            </ol>
        </nav>
        <div class="px-5">
            <div class="my-5 p-5 w-75 d-flex justify-content-center">感謝您的購買~~~</div>
            <div class="d-flex justify-content-evenly px-5 mx-5">
                <a href="/"><button class="btn btn-outline-dark border-5" style="width: 100px">回首頁</button></a>
                <button class="btn btn-outline-dark border-5" style="width: 100px">查看訂單</button>
            </div>
        </div>
    </div>
@endsection
