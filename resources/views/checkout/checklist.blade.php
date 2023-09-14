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
            @foreach ($carts ?? [] as $item)
                <li id="row{{ $item->id }}" class="list-group-item d-flex justify-content-between align-items-center">
                    <span><img src="{{ asset($item->product->img_path) }}" alt="" width="150"></span>
                    <div>{{ $item->product->name }}
                        <p>{{ $item->product->desc }}</p>
                        <p>{{ $item->product->price }}</p>
                    </div>
                    <div class="btns d-flex">
                        <button type="button" class="controlBtn minusBtn" onclick="minus({{ $item->id }})">-</button>
                        <input name="qty{{ $item->id }}" id="product{{ $item->id }}" type="number"
                            value="{{ $item->qty }}" onchange="checkQty('{{ $item->id }}')">
                        <button type="button" class="controlBtn plusBtn" onclick="plus({{ $item->id }})">+</button>
                    </div>
                    <span id="price{{ $item->id }}">${{ $item->product->price * $item->qty }}</span>
                    <button type="button" class="btn btn-danger" onclick="deleteCart({{ $item->id }})">Delete</button>
                </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between">
                <span>Subtotal</span>
                <span id="total">${{ $total }}</span>
            </li>

        </ul>
        @if ($carts->count())
            <div id="nextStep" class="d-flex justify-content-end">
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

        function checkQty(id) {
            const input = document.querySelector(`input#product${id}`);
            if (input.value <= 0) {
                input.value = 1;
            }
            fetchQty(id, input.value);
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
                if (data.code == 1) {

                    const price = document.querySelector(`#price${id}`);
                    price.textContent = '$' + `${data.price}`;

                    const totalEl = document.querySelector('#total');
                    const all_price = document.querySelectorAll('[id^=price]');
                    // console.log(all_price);
                    let total = 0;
                    all_price.forEach(element => {
                        const price = parseInt(element.textContent.substring(1));
                        // console.log(price);
                        total += price;
                    });

                    totalEl.textContent = '$' + total;

                } else {
                    location.reload();
                }
            });
        }

        function deleteCart(id) {

            Swal.fire({
                title: '確定要刪除此筆資料嗎?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '刪除'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {

                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('_method', 'DELETE');
                    formData.append('cart_id', id);

                    fetch('{{ route('user.check_delCart') }}', {
                        method: 'POST',
                        body: formData,
                    }).then((res) => {
                        return res.json();
                    }).then((data) => {
                        if (data.code === 1) {
                            const row = document.querySelector(`#row${data.id}`);
                            const total = document.querySelector('#total');
                            row.remove();
                            total.textContent = '$' + data.total;

                            const rows = document.querySelectorAll('[id^=row]');
                            const nextBtn = document.querySelector('#nextStep');
                            if(rows.length === 0) {
                                nextBtn.textContent = '';
                            }
                        } else {
                            location.reload();
                        }
                    });
                }
            });
        }
    </script>
@endsection
