@extends('layouts.app')

@section('content')
@if(Auth::check())
<div class="card">
    <div class="card-header">{{ __('あなたはログイン状態') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{ __('ここはログイン後のTOP画面です') }}
    </div>
</div>
@else
<div class="card">
    <div class="card-header">{{ __('あなたはログインしていない状態') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{ __('ログインしましょう') }}
    </div>
</div>
@endif

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

@if(Auth::check())
    <div>
        <p><a href="/majan/top">ログイン後のTop画面にいく</a></p>
    </div>
@endif

@endsection