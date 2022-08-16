@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-center">
                        <h1>アテンダント登録フォーム</h1>
                    </div>
                    @include('common.error')
                    <form action="{{ url('done') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                <p>アテンド雀荘</p>
                            </div>
                            <div class="col-sm-6">
                                <p><input type="text" name="attend_janso" class="form-control"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                <p>アテンド方針</p>
                            </div>
                            <div class="col-sm-6">
                                <p><input type="text" name="attend_houshin" class="form-control"></p>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                            <p>アテンダント画像</p>
                        </div>
                        <div class="col-sm-6">
                            <input id="fileUploader" type="file" name="myimg" accept='image/'  enctype="multipart/form-data" multiple="multiple" required autofocus>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12 d-flex justify-content-center">
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