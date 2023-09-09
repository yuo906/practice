@extends('templates.template')
@section('content')
    <main class="container my-5">
        <button type="button" onclick="fetchData()">測試</button>
        <div>step1</div>
        <form action="{{ route('test.step1Store')}}" method="POST">
            @csrf
            <input type="tel" name="phone" value="{{$phone}}">
            <button type="submit">下一步</button>
        </form>

    </main>
@endsection

@section('js')
    <script>
        function fetchData() {
            const formData = new FormData();
            formData.append('test', 1234546);
            formData.append('_token', '{{ csrf_token() }}');
            fetch(`/fetch/text`, {
                method: "POST",
                body: formData,
            });
        }
    </script>
@endsection
