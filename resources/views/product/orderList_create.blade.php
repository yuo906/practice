@extends('templates.template')
@section('content')
    <div class="content-page py-4 px-lg-0 px-xl-5 mx-md-5 d-flex flex-column">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content-title d-flex justify-content-between align-items-center flex-column px-xxl-5 px-xl-0">
                <div class="title mb-4 px-2 w-100">
                    <h2 class="fw-medium w-50">新增產品</h2>
                    <h6><span class="text-Dashboard">Dashboard</span>
                        &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;
                        Order List
                    </h6>
                </div>
                <div class="order w-100 mb-5 px-2">
                    <div class="card p-5 border-0 o-card">
                        <div class="top d-flex flex-column gap-5">
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品名稱*</span>
                                <input name="name" type="text" required>
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品圖片*</span>
                                <input name="image" type="file" accept="image/*">
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品價格*</span>
                                <input name="price" type="number" min="10" required>
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品狀態</span>
                                <label for="show">
                                    <input id="show" name="status" type="radio" value="1">顯示
                                </label>
                                <label for="notshow">
                                    <input id="notshow" name="status" type="radio" value="2">不顯示
                                </label>
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品描述</span>
                                <textarea name="desc" class="w-100" style="resize:none; min-height:150px;"></textarea>
                            </div>
                        </div>
                        <div class="bottom btn-group mt-4 d-flex justify-content-evenly">
                            <a href="{{ route('product.cart') }}">
                                <button type="button" class="btn-lg bg-primary-subtle py-2 px-3">取消按鈕</button></a>
                            <a href="{{ route('product.store') }}">
                                <button type="submit" class="btn-lg bg-primary-subtle py-2 px-3">新增按鈕</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
