@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>自分のプロフィール</h1>
                </div>
                <div class="card-body">
                    <p><a href="/top">トップに戻る</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="card-body">
        <div class="card-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                    <th>名前</th>
                    <th>登録アドレス</th>
                    <th>role_flag</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                        <tr>
                            
                            <td class="table-text">
                                <div>{{ $user_profile->name }}</div>
                            </td>
                               
                            <td class="table-text">
                                <div>{{ $user_profile->email }}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $user_profile->role_flag }}</div>
                            </td>

                        </tr>
                </tbody>
            </table>
        </div>
    </div>		

@endsection