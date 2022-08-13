@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>アテンダントの詳細です</h1>
                </div>
            </div>
           
        <div class="card">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>名前</th>
                        <th>アテンド雀荘</th>
                        <th>アテンド方針</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                            <tr>
                                <td class="table-text">
                                    <div>{{ $attendant->name }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $attendant->attend_janso }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $attendant->attend_houshin }}</div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>		

        <p><a href="/majan/top">Topに戻る</a></p>
        </div>
    </div>
</div>
@endsection