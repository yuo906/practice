@extends('templates.template')
@section('content')
    <div class="container-fluid align-items-center">
        <h3>歡迎，{{ Auth::user()->name }}</h3>
    </div>
@endsection
