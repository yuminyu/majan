@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>アテンダントの登録画面です</h1>
                </div>

                  <!-- Bootstrapの定形コード… -->
                <div class="card-body">
                    <div class="card-title">
                        アテンダント登録フォーム
                    </div>
                    <!-- バリデーションエラーの表示に使用-->
                    @include('common.error')
                    <!-- バリデーションエラーの表示に使用-->
                    <!-- 投稿フォーム -->
                    <form action="{{ url('/majan/done') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <!-- 投稿のタイトル -->
                        <div class="form-group">
                            アテンド雀荘
                            <div class="col-sm-6">
                                <input type="text" name="attend_janso" class="form-control">
                            </div>
                        </div>
                        <!-- 投稿の本文 -->
                        <div class="form-group">
                            アテンド方針
                            <div class="col-sm-6">
                                <input type="text" name="attend_houshin" class="form-control">
                            </div>
                        </div>
                        <!--　登録ボタン -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                アテンダント登録ボタン
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection