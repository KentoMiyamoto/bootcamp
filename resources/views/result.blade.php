@extends('layouts.app')
@section('content')
    <div class="panel-body">
    
        <!-- 表示領域 -->
   <div class="panel panel-default">
       <div class="panel-heading">試合結果</div>
       <div class="panel-body">
           <table class="table table-striped task-table">
               <!-- テーブルヘッダ -->
               <thead>
                   <th></th>
                   <th>&nbsp;</th>
               </thead>
               <!-- テーブル本体 -->
               <tbody>
             
             @foreach ($result as $result)
                       <tr>
                           <td class="table-text">
                               <div>組み合わせID:{{ $result->kumiawase_id }} </div>
                            　 @if (($result->position) ===1)先鋒　
                               @elseif(($result->position) ===2)次鋒
                　            　@elseif(($result->position)===3) 中堅
                　            　@elseif(($result->position)===4) 副将
                　            　@elseif(($result->position)===5)大将
    　　　            　　　　　　　　　　@endif　
    
                               <div>赤チーム{{ $result->red_team_id }} </div>
                               <div>白チーム{{ $result->white_team_id }} </div>
                               
                               <div>1本目
                               @if (($result->one_tech) ===1)赤面
                               @elseif(($result->one_tech )===2)赤小手
                　            　@elseif(($result->one_tech)===3) 赤胴
                　            　@elseif(($result->one_tech )===4)白面
                　            　@elseif(($result->one_tech)===5) 白小手
        　           　　　　    　　@elseif(($result->one_tech )===6) 白胴
        　           　　　　    　　@elseif(($result->one_tech )===7) 無し
           　　　　    　　　    　　@elseif(($result->one_tech )===0) 無し
    　　　            　　　　　　　　　　@endif　
                            </div>    
                              
                              
                               <div>2本目
                               @if (($result->two_tech) ===1)赤面
                               @elseif(($result->two_tech )===2)赤小手
                　            　@elseif(($result->two_tech)===3) 赤胴
                　            　@elseif(($result->two_tech )===4)白面
                　            　@elseif(($result->two_tech)===5) 白小手
        　           　　　　    　　@elseif(($result->two_tech )===6) 白胴
        　           　　　　    　　@elseif(($result->two_tech )===7) 無し
           　　　　    　　　    　　@elseif(($result->two_tech )===0) 無し
    　　　            　　　　　　　　　　@endif　
                            </div>  
                            
                            
                               <div>3本目
                               @if (($result->three_tech) ===1)赤面
                               @elseif(($result->three_tech )===2)赤小手
                　            　@elseif(($result->three_tech)===3) 赤胴
                　            　@elseif(($result->three_tech )===4)白面
                　            　@elseif(($result->three_tech)===5) 白小手
        　           　　　　    　　@elseif(($result->three_tech )===6) 白胴
        　           　　　　    　　@elseif(($result->three_tech )===7) 無し
           　　　　    　　　    　　@elseif(($result->three_tech )===0) 無し
    　　　            　　　　　　　　　　@endif　
                            </div>  
                               <div>勝敗
                              @if (($result->result) ===1)赤WIN
                               @elseif(($result->result )===2)白WIN
                               @elseif(($result->result )===0) 無し
                               
                        　　　@endif　

                               </div>
                               

                            </td>
                       </tr>
             @endforeach    
                  
               </tbody>
           </table>
       </div>
   </div>
<!-- ここまでタスクリスト -->
        
        
        
        
    </div>
@endsection