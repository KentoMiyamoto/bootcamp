@extends('layouts.app')
@section('content')
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用するエラーファイル-->
        @include('common.errors')
        <!-- タスク登録フォーム -->
        <form action="{{ url('team') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- チーム名 -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="team" class="col-sm-3 control-label">チーム名</label>
                    <input type="text" name="team" id="team" class="form-control"><br>

                    <label for="senpou" class="col-sm-3 control-label">先鋒</label>
                    <input type="text" name="senpou" id="senpou" class="form-control"><br>
                    
                    <label for="jihou" class="col-sm-3 control-label">次鋒</label>
                    <input type="text" name="jihou" id="jihou" class="form-control"><br>


                    <label for="chuken" class="col-sm-3 control-label">中堅</label>
                    <input type="text" name="chuken" id="chuken" class="form-control"><br>


                    <label for="fukusyo" class="col-sm-3 control-label">副将</label>
                    <input type="text" name="fukusyo" id="fukusyo" class="form-control"><br>


                    <label for="taisyo" class="col-sm-3 control-label">大将</label>
                    <input type="text" name="taisyo" id="taisyo" class="form-control"><br>

                    <label for="kantoku" class="col-sm-3 control-label">監督</label>
                    <input type="text" name="kantoku" id="kantoku" class="form-control"><br>

                </div>
            </div>
            
            
            <!-- タスク登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
        
        <!--api画面用ボタン-->
        <a href="{{ url('api_test/') }}">
       <button type="submit" class="btn btn-primary">API処理画面</button>
        </a>
    
    
        
    </div>
@endsection