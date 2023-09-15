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
                    <th scope="col">訂單狀態</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody>

                {{-- // status
    // 1 => 未繳費
    // 2 => 已繳費
    // 3 => 已出貨
    // 4 => 完成訂單
    // 5 => 取消訂單 --}}

                @foreach ($orders as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->ps }}</td>
                        <td>{{ $item->total_price }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            @if ($item->status == 1)
                                未繳費
                            @elseif($item->status == 2)
                                已繳費
                            @elseif($item->status == 3)
                                已出貨
                            @elseif($item->status == 4)
                                完成訂單
                            @else
                                取消訂單
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('user_orderlist_detail', ['order_id' => $item->id]) }}">
                                <button class="btn btn-success">查看</button>
                            </a>
                            @if($item->status == 1)
                            <form action="{{route('user_order.back_to_pay')}}" method="POST">
                                @csrf
                                <input name="orderId" type="hidden" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-primary">繳費</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection


@if (Session::has('msg'))
    @section('js')
        <script>
            Swal.fire('{{ Session::get('msg') }}');
        </script>
    @endsection
@endif
