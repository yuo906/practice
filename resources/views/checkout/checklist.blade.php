@extends('templates.template_website')
@section('head')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .btns {
            border: 1px solid #000000;
            justify-content: center;
            align-items: center;
            border-radius: 10px;

        }

        .btns input {
            width: 50px;
            border: none;
            outline: none;
            text-align: center;
        }

        .controlBtn {
            border: none;
            background-color: #ffffff;
            padding: 10px;
        }

        .minusBtn {
            border-right: 1px solid #000000;
            border-radius: 10px 0px 0px 10px;
        }

        .plusBtn {
            border-left: 1px solid #000000;
            border-radius: 0px 10px 10px 0px;
        }
    </style>
@endsection
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
        {{-- <form action="{{ route('user.checkqty') }}" method="POST"> --}}
        {{-- @csrf --}}
        {{-- , ['id' => $item->id] --}}
        <ul class="list-group">
            <li class="list-group-item">Order Details</li>
            {{-- @foreach ($item->product ?? [] as $checkout) --}}

            {{-- @dd($item->product) --}}
            @foreach ($carts ?? [] as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><img src="{{ asset($item->product->img_path) }}" alt="" width="150"></span>
                    <span>{{ $item->product->name }}
                        <p>{{ $item->product->desc }}</p>
                        <p>{{ $item->product->price }}</p>
                    </span>
                    <div class="btns d-flex">
                        <button type="button" class="controlBtn minusBtn" onclick="minus({{ $item->id }})">-</button>
                        <input name="qty{{ $item->id }}" id="product{{ $item->id }}" type="number"
                            value="{{ $item->qty }}" onchange="checkQty(this)">
                        <button type="button" class="controlBtn plusBtn" onclick="plus({{ $item->id }})">+</button>
                    </div>

                    <span id="price{{ $item->id }}">${{ $item->product->price * $item->qty }}</span>

                </li>
            @endforeach
            {{-- @endforeach --}}
            <li class="list-group-item d-flex justify-content-between">
                <span>Subtotal</span>
                <span id="total">${{ $total }}</span>
            </li>

        </ul>
        @if ($carts->count())
            <div class="d-flex justify-content-end">
                <a href="{{ route('user.del') }}">
                    <button type="button" class="btn btn-outline-dark border-5" style="width: 100px">下一步</button>
                </a>
            </div>
        @endif
        {{-- </form> --}}

    </div>
@endsection
@section('js')
    <script>
        function minus(id) {
            // console.log(id);
            const input = document.querySelector(`input#product${id}`);
            if (input.value === '1') return;
            input.value--;
            fetchQty(id, input.value);
        }

        function plus(id) {
            const input = document.querySelector(`input#product${id}`);
            input.value++;
            fetchQty(id, input.value);
        }

        function checkQty(el) {
            console.log(el);
            if (el.value <= 0) {
                // console.log(el);
                el.value = 1;
            }
        }

        function fetchQty(id, qty) {

            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('_method', 'PUT');
            formData.append('qty', qty);
            formData.append('cart_id', id);

            fetch('{{ route('user.checkqty') }}', {
                method: 'POST',
                body: formData,
            }).then((res) => {
                return res.json();
            }).then((data) => {
                const price = document.querySelector(`#price${id}`);
                // const total =document.querySelector('#total');
                price.textContent = '$' + `${data.price}`;

                // const all_price =document.querySelectorAll('li ')
            });

        }
    </script>
@endsection
