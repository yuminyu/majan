@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="card">
        <div class="card-header">{{ __('あなたはログイン状態') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('ここはログイン後のTOP画面です') }}
            <br>{{ __('ここはログイン後のTOP画面です') }}
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="row">
            <div class="col">
                <p><img src="{{ asset('img/welcom.jpg') }}" alt="" class="my-5 w-100"></p>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <p><a href="/majan/listattendant">アテンダント一覧画面に</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><img src="{{ asset('img/welcom.jpg') }}" alt="" class="my-5 w-100"></p>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <p><a href="/majan/recommend">オススメ雀荘</a></p>
            </div>
        </div>
        @if($user_kengen === 1)
        <div class="row">
            <div class="col">
                <p><img src="{{ asset('img/welcom.jpg') }}" alt="" class="my-5 w-100"></p>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <p><a href="/majan/attendantregister">アテンダントとして登録する</a></p>
            </div>
        </div>
        @endif
        @if($user_kengen === 5)
        <div class="row">
            <div class="col">
                <p><img src="{{ asset('img/welcom.jpg') }}" alt="" class="my-5 w-100"></p>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <p><a href="/majan/yameru">アテンダントを辞める</a></p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
