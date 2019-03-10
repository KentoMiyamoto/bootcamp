@extends('layouts.app')
@section('content')
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用するエラーファイル-->
        @include('common.errors')
        <!-- タスク登録フォーム -->
        <form action="{{ url('kekka') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- チーム名 -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="kumiawase_id" class="col-sm-3 control-label">組み合わせID</label>
                    <input type="text" name="kumiawase_id" id="kumiawase_id" class="form-control"><br>

                    <label for="senpou" class="col-sm-3 control-label">先鋒</label><br>
                    1本目: 赤面<input type="checkbox" name="sen1" id="sen1" value=1 >
                    赤小手<input type="checkbox" name="sen1" id="sen1" value=2 >
                    赤胴<input type="checkbox" name="sen1" id="sen1" value=3 >
                    白面<input type="checkbox" name="sen1" id="sen1" value=4 >
                    白小手<input type="checkbox" name="sen1" id="sen1" value=5 >
                    白胴<input type="checkbox" name="sen1" id="sen1" value=6 >
                    無し<input type="checkbox" name="sen1" id="sen1" value=7 ><br>
                    
                    2本目: 赤面<input type="checkbox" name="sen2" id="sen2" value=1 >
                    赤小手<input type="checkbox" name="sen2" id="sen2" value=2 >
                    赤胴<input type="checkbox" name="sen2" id="sen2" value=3 >
                    白面<input type="checkbox" name="sen2" id="sen2" value=4 >
                    白小手<input type="checkbox" name="sen2" id="sen2" value=5 >
                    白胴<input type="checkbox" name="sen2" id="sen2" value=6 >
                    無し<input type="checkbox" name="sen2" id="sen2" value=7 ><br>
    
                    3本目: 赤面<input type="checkbox" name="sen3" id="sen2" value=1 >
                    赤小手<input type="checkbox" name="sen3" id="sen2" value=2 >
                    赤胴<input type="checkbox" name="sen3" id="sen2" value=3 >
                    白面<input type="checkbox" name="sen3" id="sen2" value=4 >
                    白小手<input type="checkbox" name="sen3" id="sen2" value=5 >
                    白胴<input type="checkbox" name="sen3" id="sen2" value=6 >
                    無し<input type="checkbox" name="sen3" id="sen2" value=7 ><br>
                    
                    勝敗: 赤<input type="checkbox" name="senk" id="senk" value=1 >
                    白<input type="checkbox" name="senk" id="senk" value=2 ><br>
                    <br>

    
    
                    <label for="jihou" class="col-sm-3 control-label">次鋒</label><br>
                    1本目: 赤面<input type="checkbox" name="" id="ji1" value=1 >
                    赤小手<input type="checkbox" name="ji1" id="ji1" value=2 >
                    赤胴<input type="checkbox" name="ji1" id="ji1" value=3 >
                    白面<input type="checkbox" name="ji1" id="ji1" value=4 >
                    白小手<input type="checkbox" name="ji1" id="ji1" value=5 >
                    白胴<input type="checkbox" name="ji1" id="ji1" value=6 >
                    無し<input type="checkbox" name="ji1" id="ji1" value=7 ><br>
                    
                    2本目: 赤面<input type="checkbox" name="ji2" id="ji2" value=1 >
                    赤小手<input type="checkbox" name="ji2" id="ji2" value=2 >
                    赤胴<input type="checkbox" name="ji2" id="ji2" value=3 >
                    白面<input type="checkbox" name="ji2" id="ji2" value=4 >
                    白小手<input type="checkbox" name="ji2" id="ji2" value=5 >
                    白胴<input type="checkbox" name="ji2" id="ji2" value=6 >
                    無し<input type="checkbox" name="ji2" id="ji2" value=7 ><br>
    
                    3本目: 赤面<input type="checkbox" name="ji3" id="ji2" value=1 >
                    赤小手<input type="checkbox" name="ji3" id="ji2" value=2 >
                    赤胴<input type="checkbox" name="ji3" id="ji2" value=3 >
                    白面<input type="checkbox" name="ji3" id="ji2" value=4 >
                    白小手<input type="checkbox" name="ji3" id="ji2" value=5 >
                    白胴<input type="checkbox" name="ji3" id="ji2" value=6 >
                    無し<input type="checkbox" name="ji3" id="ji2" value=7 ><br>
                    
                    勝敗: 赤<input type="checkbox" name="jik" id="jik" value=1 >
                    白<input type="checkbox" name="jik" id="jik" value=2 ><br>
                    <br>

                    <label for="chuken" class="col-sm-3 control-label">中堅</label><br>
                    1本目: 赤面<input type="checkbox" name="chu1" id="chu1" value=1 >
                    赤小手<input type="checkbox" name="chu1" id="chu1" value=2 >
                    赤胴<input type="checkbox" name="chu1" id="chu1" value=3 >
                    白面<input type="checkbox" name="chu1" id="chu1" value=4 >
                    白小手<input type="checkbox" name="chu1" id="chu1" value=5 >
                    白胴<input type="checkbox" name="chu1" id="chu1" value=6 >
                    無し<input type="checkbox" name="chu1" id="chu1" value=7 ><br>
                    
                    2本目: 赤面<input type="checkbox" name="chu2" id="chu2" value=1 >
                    赤小手<input type="checkbox" name="chu2" id="chu2" value=2 >
                    赤胴<input type="checkbox" name="chu2" id="chu2" value=3 >
                    白面<input type="checkbox" name="chu2" id="chu2" value=4 >
                    白小手<input type="checkbox" name="chu2" id="chu2" value=5 >
                    白胴<input type="checkbox" name="chu2" id="chu2" value=6 >
                    無し<input type="checkbox" name="chu2" id="chu2" value=7 ><br>
    
                    3本目: 赤面<input type="checkbox" name="chu3" id="chu2" value=1 >
                    赤小手<input type="checkbox" name="chu3" id="chu2" value=2 >
                    赤胴<input type="checkbox" name="chu3" id="chu2" value=3 >
                    白面<input type="checkbox" name="chu3" id="chu2" value=4 >
                    白小手<input type="checkbox" name="chu3" id="chu2" value=5 >
                    白胴<input type="checkbox" name="chu3" id="chu2" value=6 >
                    無し<input type="checkbox" name="chu3" id="chu2" value=7 ><br>
                    
                    勝敗: 赤<input type="checkbox" name="chuk" id="chuk" value=1 >
                    白<input type="checkbox" name="chuk" id="chuk" value=2 ><br>
                    <br>

                    <label for="fukusyo" class="col-sm-3 control-label">副将</label><br>
                    1本目: 赤面<input type="checkbox" name="fuku1" id="fuku1" value=1 >
                    赤小手<input type="checkbox" name="fuku1" id="fuku1" value=2 >
                    赤胴<input type="checkbox" name="fuku1" id="fuku1" value=3 >
                    白面<input type="checkbox" name="fuku1" id="fuku1" value=4 >
                    白小手<input type="checkbox" name="fuku1" id="fuku1" value=5 >
                    白胴<input type="checkbox" name="fuku1" id="fuku1" value=6 >
                    無し<input type="checkbox" name="fuku1" id="fuku1" value=7 ><br>
                    
                    2本目: 赤面<input type="checkbox" name="fuku2" id="fuku2" value=1 >
                    赤小手<input type="checkbox" name="fuku2" id="fuku2" value=2 >
                    赤胴<input type="checkbox" name="fuku2" id="fuku2" value=3 >
                    白面<input type="checkbox" name="fuku2" id="fuku2" value=4 >
                    白小手<input type="checkbox" name="fuku2" id="fuku2" value=5 >
                    白胴<input type="checkbox" name="fuku2" id="fuku2" value=6 >
                    無し<input type="checkbox" name="fuku2" id="fuku2" value=7 ><br>
    
                    3本目: 赤面<input type="checkbox" name="fuku3" id="fuku2" value=1 >
                    赤小手<input type="checkbox" name="fuku3" id="fuku2" value=2 >
                    赤胴<input type="checkbox" name="fuku3" id="fuku2" value=3 >
                    白面<input type="checkbox" name="fuku3" id="fuku2" value=4 >
                    白小手<input type="checkbox" name="fuku3" id="fuku2" value=5 >
                    白胴<input type="checkbox" name="fuku3" id="fuku2" value=6 >
                    無し<input type="checkbox" name="fuku3" id="fuku2" value=7 ><br>
                    
                    勝敗: 赤<input type="checkbox" name="fukuk" id="fukuk" value=1 >
                    白<input type="checkbox" name="fukuk" id="fukuk" value=2 ><br>
                    <br>

                    <label for="taisyo" class="col-sm-3 control-label">大将</label><br>
                    1本目: 赤面<input type="checkbox" name="tai1" id="tai1" value=1 >
                    赤小手<input type="checkbox" name="tai1" id="tai1" value=2 >
                    赤胴<input type="checkbox" name="tai1" id="tai1" value=3 >
                    白面<input type="checkbox" name="tai1" id="tai1" value=4 >
                    白小手<input type="checkbox" name="tai1" id="tai1" value=5 >
                    白胴<input type="checkbox" name="tai1" id="tai1" value=6 >
                    無し<input type="checkbox" name="tai1" id="tai1" value=7 ><br>
                    
                    2本目: 赤面<input type="checkbox" name="tai2" id="tai2" value=1 >
                    赤小手<input type="checkbox" name="tai2" id="tai2" value=2 >
                    赤胴<input type="checkbox" name="tai2" id="tai2" value=3 >
                    白面<input type="checkbox" name="tai2" id="tai2" value=4 >
                    白小手<input type="checkbox" name="tai2" id="tai2" value=5 >
                    白胴<input type="checkbox" name="tai2" id="tai2" value=6 >
                    無し<input type="checkbox" name="tai2" id="tai2" value=7 ><br>
    
                    3本目: 赤面<input type="checkbox" name="tai3" id="tai2" value=1 >                    
                    赤小手<input type="checkbox" name="tai3" id="tai2" value=2 >
                    赤胴<input type="checkbox" name="tai3" id="tai2" value=3 >
                    白面<input type="checkbox" name="tai3" id="tai2" value=4 >
                    白小手<input type="checkbox" name="tai3" id="tai2" value=5 >
                    白胴<input type="checkbox" name="tai3" id="tai2" value=6 >
                    無し<input type="checkbox" name="tai3" id="tai2" value=7 ><br>
 
                    勝敗: 赤<input type="checkbox" name="taik" id="taik" value=1 >
                    白<input type="checkbox" name="taik" id="taik" value=2 ><br>
                </div>
                
            </div>
            
            <!-- タスク登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    
    
        
    </div>
@endsection