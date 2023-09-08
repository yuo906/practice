@extends('templates.template_website')
@section('main')
    <main class="container my-5">
        <form action="{{ route('userinfo.update') }}" method="POST">
            @csrf
            <h3>帳號資訊</h3>
            <div>帳號:{{ $user->email }}</div>
            <div>
                <div>姓名:
                    <span class="username">{{ $user->name }}</span>
                </div>
                <input name="name" type="text" value="{{ $user->name }}" class="d-none">
                <div class="d-none column-gap-3">
                    <button type="submit" class="btn btn-success">確認送出</button>
                    <button type="button" class="btn btn-success">取消</button>
                </div>
            </div>


            <div class="d-flex mt-3">
                <button type="button" class="btn btn-success column-gap-3" onclick="editmode()">編輯</button>
            </div>
        </form>
    </main>
    {{$errors->first()}}
@endsection

@section('js')
    <script>
        function editmode() {
            const nameInput = document.querySelector('input[name="name"]');
            const username = document.querySelector('.username');
            const btns = document.querySelector('.d-none.column-gap-3');
            username.classList.add('d-none');
            nameInput.classList.remove('d-none');
            btns.classList.add('d-flex');
            btns.classList.remove('d-none');
        }
    </script>

    @if ($errors->first())
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ $errors->first() }}',
            })
        </script>
    @endif
    {{-- @error('nameError')
    @enderror --}}
@endsection
