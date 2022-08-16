@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>アテンダントの一覧です</h1>
                </div>
            </div>
           

        @if (count($attendants) > 0)
        <div class="card">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>アテンダント画像</th>
                        <th>名前</th>
                        <th>登録アドレス</th>
                        <th>アテンダント詳細</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($attendants as $attendant)
                            <tr>
                                <td>
                                    <img src="/majan/uploads/{{ $attendant->myimg }}" width="100" height="100">
                                </td>
                                <td class="table-text">
                                    <div>{{ $attendant->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $attendant->email }}</div>
                                </td>
                                <td class="table-text">
                                    <a href="{{ url('detail/'.$attendant->id) }}" class="btn btn-danger">詳細</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>		
        @endif

        @if (count($attendants) == 0)
        <div class="card">
            <div class="card-body">
                <h1>アテンダントはいません</h1>
            </div>
        </div>
        @endif

        </div>
    </div>
</div>
@endsection