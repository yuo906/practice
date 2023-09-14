@extends('templates.template_website')
@section('main')
    <main class="container my-1">
        <h3>訂單資訊</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">備註</th>
                    <th scope="col">訂單金額</th>
                    <th scope="col">成立時間</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->ps }}</td>
                        <td>{{ $item->total_price }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <a href="{{ route('user_orderlist_detail', ['order_id' => $item->id]) }}">
                                <button class="btn btn-success">查看</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
