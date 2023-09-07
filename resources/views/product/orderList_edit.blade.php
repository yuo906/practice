@extends('templates.template')
@section('content')
    <div class="content-page py-4 px-lg-0 px-xl-5 mx-md-5 d-flex flex-column">
        <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content-title d-flex justify-content-between align-items-center flex-column px-xxl-5 px-xl-0">
                <div class="title mb-4 px-2 w-100">
                    <h2 class="fw-medium w-50">編輯產品</h2>
                    <h6><span class="text-Dashboard">Dashboard</span>
                        &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;
                        Order List
                    </h6>
                </div>
                <div class="order w-100 mb-5 px-2 ">
                    <div class="card p-5 border-0 o-card">
                        <div class="top d-flex flex-column gap-5">
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品名稱*</span>
                                <input name="name" type="text" value="{{ $product->name }}" required>
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品圖片*</span>
                                <img src="{{ asset($product->img_path) }}" alt="" class="w-15">
                                <input name="image" type="file" accept="image/*">
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">產品價格*</span>
                                <input name="price" type="number" value="{{ $product->price }}" required>
                            </div>
                            <div class="d-flex gap-5 align-items-center">
                                <span class="bg-primary-subtle px-3 py-2">顯示狀態</span>
                                @if ($product->status == 1)
                                    <label><input id="show" name="status" type="radio" value="1"
                                            checked>&nbsp;顯示</label>
                                    <label><input id="notshow" name="status" type="radio"
                                            value="2">&nbsp;不顯示</label>
                                @else
                                    <label><input id="show" name="status" type="radio"
                                            value="1">&nbsp;顯示</label>
                                    <label><input id="notshow" name="status" type="radio" value="2"
                                            checked>&nbsp;不顯示</label>
                                @endif
                            </div>
                            <div class="d-flex gap-5">
                                <div class="bg-primary-subtle px-3 py-2">產品描述</div>
                                <textarea name="desc" class="w-100" style="resize:none; min-height:150px;">{{ $product->desc }}</textarea>
                            </div>
                        </div>
                        <div class="bottom btn-group mt-4 d-flex justify-content-evenly">
                            <a href="{{ route('product.cart') }}">
                                <button type="button" class="btn-lg bg-primary-subtle py-2 px-3">取消按鈕</button>
                            </a>
                            <button type="submit" class="btn-lg bg-primary-subtle py-2 px-3">儲存按鈕</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
