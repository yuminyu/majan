@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p><img src="{{ asset('img/welcom.jpg') }}" alt="" class="my-5 w-100"></p>
        </div>
        <div class="col d-flex align-items-center justify-content-center">
            <p class="mb-0">Welcome mypage</p>
        </div>
    </div>
</div>
<!-- @if(Auth::check())
    <div class="col-md-8">
        <p><a href="/majan/top">ログイン後のTop画面にいく</a></p>
    </div>
@endif -->

@endsection