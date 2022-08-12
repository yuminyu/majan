@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Welcome mypage</h1>         
        </div>
        @if(Auth::check())
        <div class="col-md-8">
            <p><a href="/top">ログイン後のTop画面にいく</a></p>
        </div>
        @endif
    </div>
</div>

@endsection