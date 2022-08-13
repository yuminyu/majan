@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card">
                <p><a href="/majan/listattendant">アテンダント一覧画面に</a></p>
                <p><a href="/majan/recommend">オススメ雀荘</a></p>
                <p><a href="/majan/attendantregister">アテンダントとして登録する</a></p>
            <div>
            @if($user_kengen === 5)
            <div class="card">
                <p><a href="/majan/yameru">アテンダントを辞める</a></p>
            <div>
            @endif
        </div>
    </div>
</div>
@endsection
