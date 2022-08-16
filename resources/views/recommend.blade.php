@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>オススメ雀荘の一覧です</h1>
                </div>
            </div>
        @if (count($jansos) > 0)
        <div class="card">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>雀荘の画像</th>
                        <th>雀荘の名前</th>
                        <th>雀荘の特徴</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($jansos as $janso)
                            <tr>
                                <td>
                                    <img src="/majan/uploads/{{ $janso->jansoimg }}" width="100" height="100">
                                </td>
                                <td class="table-text">
                                    <div>{{ $janso->jansoName }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $janso->jansoTokutyo }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>		
        @endif

        @if (count($jansos) == 0)
        <div class="card">
            <div class="card-body">
                <h1>オススメ雀荘はありません</h1>
            </div>
        </div>
        @endif

        </div>
    </div>
</div>
@endsection