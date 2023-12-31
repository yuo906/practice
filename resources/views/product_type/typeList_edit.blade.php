@extends('templates.template')
@section('content')
    <div class="content-page py-4 px-lg-0 px-xl-5 mx-md-5 d-flex flex-column">
        <form action="{{ route('type.update', ['type' => $type->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="content-title d-flex justify-content-between align-items-center flex-column px-xxl-5 px-xl-0">
                <div class="title mb-4 px-2 w-100">
                    <h2 class="fw-medium w-50">編輯類別</h2>
                    <h6>
                        <span class="text-Dashboard">Dashboard</span>
                        &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp; Order List
                    </h6>
                </div>
                <div class="order w-100 mb-5 px-2 ">
                    <div class="card p-5 border-0 o-card">
                        <div class="top d-flex flex-column gap-5">
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">類別名稱</span>
                                <input name="name" type="text" value="{{$type->name}}">
                            </div>
                            {{-- @dd($type->productTypeImg) --}}
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">類別圖片</span>
                                @foreach ($type->productTypeImg ?? [] as $item)
                                {{-- @dump($item) --}}
                                <img style="width: 80px" src="{{ asset($item->img_path) }}" alt="">
                                @endforeach
                                <input name="image[]" type="file" multiple accept="image/*">
                                {{-- @dd(123) --}}
                            </div>
                            <div class="d-flex gap-5">
                                <span class="bg-primary-subtle px-3 py-2">類別描述</span>
                                <textarea name="desc"> {{$type->desc}} </textarea>
                            </div>
                        </div>
                        <div class="bottom btn-group mt-4 d-flex justify-content-evenly">
                            <a href="{{ route('type.index') }}">
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
