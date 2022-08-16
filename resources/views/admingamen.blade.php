@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-center">
                        <h1>雀荘登録フォーム</h1>
                    </div>
                    @include('common.error')
                    <form action="{{ url('jansotoroku') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                <p>雀荘の名前</p>
                            </div>
                            <div class="col-sm-6">
                                <p><input type="text" name="jansoName" class="form-control"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                <p>雀荘の特徴</p>
                            </div>
                            <div class="col-sm-6">
                                <p><input type="text" name="jansoTokutyo" class="form-control"></p>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                            <p>雀荘の画像</p>
                        </div>
                        <div class="col-sm-6">
                            <input id="fileUploader" type="file" name="jansoimg" accept='image/'  enctype="multipart/form-data" multiple="multiple" required autofocus>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    雀荘登録ボタン
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