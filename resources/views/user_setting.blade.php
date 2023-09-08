@extends('templates.template_website')
@section('main')
    <main class="container my-5">
        <h3>帳號資訊</h3>
        <div>帳號:{{ $user->email }}</div>
        <div>姓名:{{ $user->name }}</div>
    </main>
@endsection
