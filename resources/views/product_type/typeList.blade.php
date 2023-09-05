{{-- 連結的樣板 --}}
@extends('layout.template')
{{-- 樣板裡放入的資料 --}}
@section('content')
    <div class="content-page py-4 px-lg-0 px-xl-5 mx-md-5 d-flex flex-column">
        <div class="content-title d-flex justify-content-between align-items-center flex-column px-xxl-5 px-xl-0">
            <div class="title mb-4 px-2 w-100">
                <h2 class="fw-medium w-50">Type List</h2>
                <h6><span class="text-Dashboard">Dashboard</span>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbspOrder
                    List</h6>
            </div>
            <div class="order w-100 mb-5 px-2 ">
                <div class="card p-0 border-0 o-card">
                    <div
                        class="card-header bg-white d-flex justify-content-between flex-column flex-md-row order-search py-4">
                        <form class="d-flex position-relative">
                            <input class="form-control rounded-0 py-0 w-100" id="search-area" type="search"
                                placeholder="Search" aria-label="Search">
                            <a href="{{ route('type.create') }}"
                                class="mx-2 bg-primary-subtle w-50 d-flex align-items-center justify-content-center">新增類別</a>
                        </form>
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
                                    <th>類別名稱</th>
                                    <th>類別描述</th>
                                    <th>新增日期</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <div class="form-check pt-2">
                                            <input class="form-check-input checkbox" type="checkbox" value=""
                                                id="check1">
                                            <label class="form-check-label" for="check1">
                                            </label>
                                        </div>
                                    </th>
                                    <th><img src="./img/product-img-1.jpg" width="40" height="40" alt="">
                                    </th>
                                    <th>FC#1007</th>
                                    <th>Jennifer Sullivan</th>
                                    <th>01 May 2023 (10:12 am)</th>
                                    <th><span class="badge fw-bolder success">Success</span>
                                    </th>
                                    <th>$12.99</th>
                                    <th>
                                        {{-- <form action="{{ route('type.destroy') }}"> --}}
                                            <ul class="p-0 m-0 d-flex flex-column w-100 d-flex flex-column btn-group-sm w-100">
                                                <div class="bg-primary-subtle mb-1 btn">
                                                    <a href="#">Delete</a>
                                                </div>
                                                <a href="/order-list-3" class="bg-primary-subtle btn btn">
                                                    <span>Edit</span>
                                                </a>
                                            </ul>
                                        {{-- </form> --}}
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="card-footer order-page bg-white px-3 d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
                        <div>Showing 1 to 8 of 12 entries</div>
                        <div aria-label="Page navigation">
                            <ul class="pagination justify-content-end mt-3" id="page-item">
                                <li class="page-item disabled me-1">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item me-1"><a class="page-link" href="#">1</a></li>
                                <li class="page-item me-1"><a class="page-link" href="#">2</a></li>
                                <li class="page-item me-1"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
        <script>
            function deleteType(id) {
                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}')
                fetch(`/type/${id}`, {
                    method: "delete",
                    body: formData
                });

            }
        </script>
    @endsection
