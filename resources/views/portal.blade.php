@extends('layouts.app')
@section('content')
    
    
<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>

<!--<div style="font-size:20px";>-->
<!--ホーム    </div>-->
<!--<a href="{{ url('/') }}">-->
<!--<i class="material-icons" style="font-size:90px"; href="{{ url('/') }}">home</i> <!-- 家のアイコンを表示 -->
<!--</a>-->
<!--<br>-->
<!--<br>-->
<div style=float:left>
<div style="font-size:20px";>
選手/チーム情報    </div>
<a href="{{ url('/team') }}">
<i class="material-icons" style="font-size:90px";>account_box</i> <!-- 人のアイコンを表示 -->
</a>
<br>
<br>

<div style="font-size:20px";>
試合結果</div>
<a href="{{ url('/result') }}">
<i class="material-icons" style="font-size:90px";>local_library</i> <!-- 人のアイコンを表示 -->
</a>
<br>
<br>

<div style="font-size:20px";>
トーナメント表</div>
<a href="{{ url('/kumiawase') }}">
<i class="material-icons" style="font-size:90px";>map</i> <!-- 人のアイコンを表示 -->
</a>
<br>
<br>
</div>

<div style="margin-left : 200px">
<div style="font-size:20px";>
選手登録</div>
<a href="{{ url('/team_store') }}">
<i class="material-icons" style="font-size:90px";>how_to_reg</i> <!-- 人のアイコンを表示 -->
</a>
<br>
<br>

<div style="font-size:20px";>
試合結果登録</div>
<a href="{{ url('/result_store') }}">
<i class="material-icons" style="font-size:90px";>create</i> <!-- 鉛筆のアイコンを表示 -->
</a>
<br>
<br>

<div style="font-size:20px";>
組み合わせ抽選</div>
<a href="{{ url('/kumiawase_make') }}">
<i class="material-icons" style="font-size:90px";>sync</i> <!-- 鉛筆のアイコンを表示 -->
<br>
</div>

@endsection