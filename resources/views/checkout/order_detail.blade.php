@extends('templates.template_website')
@section('main')
    <main class="container my-1">
        <h3>訂單詳細資訊</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">圖片</th>
                    <th scope="col">名稱</th>
                    <th scope="col">單價</th>
                    <th scope="col">購買數量</th>
                </tr>
            </thead>
            <tbody>
                @if (!$orders)
                    <div>查無資料</div>
                @else
                    @foreach ($orders->OrderProduct as $key => $item)
                        {{-- @dd($orders->OrderProduct) --}}
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td><img width="100" src="{{ asset($item->img_path) }}" alt=""></td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        <div>
            <h3>收件資訊</h3>
            <div>收件者姓名: {{ $orders->name }}</div>
            <div>收件地址: {{ $orders->address }}</div>
            <div>收件者日期: {{ str_replace('-', '/', $orders->date) }}</div>
            <div>收件者連絡電話: {{ $orders->tel_number }}</div>
            <div>備註: {{ $orders->ps }}</div>
        </div>
        @endif
    </main>
@endsection

@if (Session::has('msg'))
    @section('js')
        <script>
            Swal.fire('{{ Session::get("msg") }}');
        </script>
    @endsection
@endif
