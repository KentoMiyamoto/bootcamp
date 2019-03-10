@extends('layouts.app')
@section('content')
    <div class="panel-body">
    
    
        <!-- この下に登録済みタスクリストを表示 -->
        <!-- 表示領域 -->

@if (count($players) > 0)
   <div class="panel panel-default">
       <div class="panel-heading">チーム情報</div>
       <div class="panel-body">
           <table class="table table-striped task-table">
               <!-- テーブルヘッダ -->
               <thead>
                   <th></th>
                   <th>&nbsp;</th>
               </thead>
               <!-- テーブル本体 -->
               <tbody>
             
                 
                   @foreach ($players as $players)
                       <tr>
                           <td class="table-text">
                               
                               <div>{{ $players->team_name }}  {{ $players->name }}</div>
                           </td>
                           <!-- 削除ボタン -->
                           <td>
                           </td>
                       </tr>
                   @endforeach
                  
                  
               
                 
                   
               </tbody>
           </table>
       </div>
   </div>
@endif
<!-- ここまでタスクリスト -->
        
        
        
        
    </div>
@endsection