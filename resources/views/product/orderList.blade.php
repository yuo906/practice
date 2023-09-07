@extends('templates.template')
@section('content')
    <div class="content-page py-4 px-lg-0 px-xl-5 mx-md-5 d-flex flex-column">
        <div class="content-title d-flex justify-content-between align-items-center flex-column px-xxl-5 px-xl-0">
            <div class="title mb-4 px-2 w-100">
                <h2 class="fw-medium w-50">Order List</h2>
                <h6><span class="text-Dashboard">Dashboard</span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbspOrder
                    List</h6>
            </div>
            <div class="order w-100 mb-5 px-2 ">
                <div class="card p-0 border-0 o-card">
                    <div
                        class="card-header bg-white d-flex justify-content-between flex-column flex-md-row order-search py-4">
                        <form action="{{ route('product.cart') }}" method="GET" class="d-flex position-relative">
                            <input class="form-control rounded-0 py-0 w-100" id="search-area" type="search"
                                placeholder="Search" aria-label="Search" name="keyword" value="{{ $keyword }}">
                            <button class="btn btn-primary w-25 ms-3" type="submit">搜尋</button>
                        </form>
                        <a href="{{ route('product.create') }}"
                            class="mx-2 bg-primary-subtle w-25 d-flex align-items-center justify-content-center">新增產品</a>
                        <div class="form-floating pt-3 pt-md-0">
                            <select class="form-select py-0 ps-3 w-100" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Status</option>
                                <option value="1">Sucess</option>
                                <option value="2">Pending</option>
                                <option value="3">cancel</option>
                            </select>
                            <label for="floatingSelect" class="p-0"></label>
                        </div>
                    </div>
                    <div class="card-body order-list p-0">
                        <table
                            class="table table-centered table-hover text-nowrap table-borderless pb-0 mb-0 table-with-checkbox">
                            <thead class="px-2">
                                <tr class="th1">
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll"
                                                onchange="checkedAll(this)">
                                            <label class="form-check-label" for="checkAll">
                                            </label>
                                        </div>
                                    </th>
                                    <th>Image</th>
                                    <th>產品名稱</th>
                                    <th>產品描述</th>
                                    <th>新增日期</th>
                                    <th>顯示</th>
                                    <th>產品價格</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <th>
                                            <div class="form-check pt-2">
                                                <input class="form-check-input checkbox" type="checkbox" value=""
                                                    id="check1">
                                                <label class="form-check-label" for="check1">
                                                </label>
                                            </div>
                                        </th>
                                        <th><img src="{{ asset($item->img_path) }}" width="40" height="40"
                                                alt=""></th>
                                        <th>{{ $item->name }}</th>
                                        <th>{{ $item->desc }}</th>
                                        <th>{{ $item->created_at->format('Y-m-d') }}</th>
                                        <th>
                                            @if ($item->status == 1)
                                                <span class="badge fw-bolder bg-success">顯示</span>
                                            @else
                                                <span class="badge fw-bolder bg-danger">不顯示</span>
                                            @endif

                                        </th>
                                        <th>{{ $item->price }}</th>
                                        <th>
                                            <ul class="p-0 m-0 d-flex flex-column d-flex flex-column btn-group-sm w-100">
                                                <form action="{{ route('product.delete', ['id' => $item->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="bg-primary-subtle mb-1 btn w-100" type="submit">Delete
                                                    </button>
                                                </form>
                                                <a href="{{ route('product.edit', ['id' => $item->id]) }}"
                                                    class="bg-primary-subtle btn">
                                                    <span>Edit</span>
                                                </a>
                                            </ul>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
