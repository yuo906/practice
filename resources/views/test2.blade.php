@extends('templates.template')
@section('content')
    <main class="container my-5">
        <div>step2</div>
        <div>電話:{{ $phone }}</div>
        <a href="{{ route('test.step1')}}">回上一步</a>
    </main>
@endsection


