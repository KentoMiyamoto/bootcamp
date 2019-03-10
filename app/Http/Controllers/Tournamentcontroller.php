<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\player;
use App\team;
use App\match;
use App\result;
use Validator;


class Tournamentcontroller extends Controller
{
         //クラスが呼ばれたら最初に実行する処理
   public function __construct(){
       $this->middleware('auth');
   }
    
       //ポータル表示処理関数
   public function portal() {
       return view('portal');
   }
    
       //試合結果表示処理関数
   public function result() {
     $result = result::select()->get();
     $team = team::select();
     $player = player::select();
     return view('result', ['result' => $result],  ['team' => $team],['player' => $player]);
   }

// 　　チーム登録画面表示
  public function team_store() {
    return view('team_store');
  }
  
//  組み合わせ画面表示 
  public function kumiawase() {

// 組み合わせの赤白のチームID・名前を取得    
    $red_result = result::join('teams','teams.team_id','=','results.red_team_id')->select('kumiawase_id','red_team_id','teams.team_name')->groupby('kumiawase_id','red_team_id','teams.team_name')->get();         
    $white_result = result::join('teams','teams.team_id','=','results.white_team_id')->select('kumiawase_id','white_team_id','teams.team_name')->groupby('kumiawase_id','white_team_id','teams.team_name')->get();         
   
    return view('kumiawase',['red_result'=>$red_result],['white_result'=>$white_result]);
    
  }  
  
  
//   試合結果登録画面表示
  public function result_store() {
    
    return view('result_store');
  }
  
  
//   チーム情報表示
  public function team() {
   
   $teams = team::select()->join('players','players.team_id','=','teams.team_id')->orderBy('teams.team_id', 'asc')->get();
   $players = player::select()->join('teams','teams.team_id','=','players.team_id')->orderBy('players.team_id', 'asc')->orderBy('position', 'asc')->get();
   return view('team', [
       'players' => $players
   ],['teams' => $teams]);
  
  }
  
  
//   チーム情報登録処理
  public function teamreg(Request $request) {
        //バリデーション
  $validator = Validator::make($request->all(), [
      'team' => 'required|max:255',
  ]);
   
    //バリデーション:エラー
  if ($validator->fails()) {
      return redirect('/')
          ->withInput()
          ->withErrors($validator);
  }
   
    // Eloquentモデル
  $teams = new team;
  $teams->team_name = $request->team;
  $teams->save();
  
  $team_id = team::select()->where('team_name','=',$request->team)->value('team_id');
  
  $players = new player;
  $players->name = $request->senpou;
  $players->age = 0;
  $players->gender = 0;
  $players->team_id = $team_id;
  $players->position = 1;
  $players->save();
  
  $players = new player;
  $players->name = $request->jihou;
  $players->age = 0;
  $players->gender = 0;
  $players->team_id = $team_id;
  $players->position = 2;
  $players->save();
  
  $players = new player;
  $players->name = $request->chuken;
  $players->age = 0;
  $players->gender = 0;
  $players->team_id = $team_id;
  $players->position = 3;
  $players->save();
  
  $players = new player;
  $players->name = $request->fukusyo;
  $players->age = 0;
  $players->gender = 0;
  $players->team_id = $team_id;
  $players->position = 4;
  $players->save();

  $players = new player;
  $players->name = $request->taisyo;
  $players->age = 0;
  $players->gender = 0;
  $players->team_id = $team_id;
  $players->position = 5;
  $players->save();
    
  $players = new player;
  $players->name = $request->kantoku;
  $players->age = 0;
  $players->gender = 0;
  $players->team_id = $team_id;
  $players->position = 6;
  $players->save();
  
    //「/」ルートにリダイレクト
  return redirect('/');
  }
  
  
//   試合結果登録処理
  public function kekkareg(Request $request) {
        //バリデーション
  $validator = Validator::make($request->all(), [
      'kumiawase_id' => 'required|max:255',
  ]);
   
    //バリデーション:エラー
  if ($validator->fails()) {
      return redirect('/')
          ->withInput()
          ->withErrors($validator);
  }
   
    // Eloquentモデル
//   $kekka = result::find($request->kumiawase_id)->where('position','=',1);    
  $kekka = result::where('kumiawase_id','=',$request->kumiawase_id)->where('position','=',1)
                 ->update(['one_tech'=>$request->sen1])   
                 ->update(['two_tech'=>$request->sen2])    
                 ->update(['three_tech'=>$request->sen3])    
                 ->update(['result'=>$request->senk]);    
                 
  $kekka2 = result::where('kumiawase_id','=',$request->kumiawase_id)->where('position','=',2)
                 ->update(['one_tech'=>$request->ji1])   
                 ->update(['two_tech'=>$request->ji2])    
                 ->update(['three_tech'=>$request->ji3])    
                 ->update(['result'=>$request->jik]);    
                 
  $kekka3 = result::where('kumiawase_id','=',$request->kumiawase_id)->where('position','=',3)
                 ->update(['one_tech'=>$request->chu1])    
                 ->update(['two_tech'=>$request->chu2])    
                 ->update(['three_tech'=>$request->chu3])    
                 ->update(['result'=>$request->chuk]);
                 
  $kekka4 = result::where('kumiawase_id','=',$request->kumiawase_id)->where('position','=',4)
                 ->update(['one_tech'=>$request->fuku1])    
                 ->update(['two_tech'=>$request->fuku2])    
                 ->update(['three_tech'=>$request->fuku3])    
                 ->update(['result'=>$request->fukuk]);
                 
 $kekka5 = result::where('kumiawase_id','=',$request->kumiawase_id)->where('position','=',5)
                 ->update(['one_tech'=>$request->tai1])    
                 ->update(['two_tech'=>$request->tai2])    
                 ->update(['three_tech'=>$request->tai3])    
                 ->update(['result'=>$request->taik]);
                
    //「/」ルートにリダイレクト
  return redirect('/');

  }
  
  
 public function teammake() {
    
    // 全チーム数を取得する
    $team_amount = team::select()->count();

    //チームIDを取得してシャッフル   
    $team_id = team::get(['team_id'])->toArray();
    shuffle($team_id);
    
    // 連想配列から、値だけを抽出
    $value = array_column($team_id,'team_id');
    
    // 一回戦の数を取得
    $first_game = $team_amount/2;
    
    $red = 0;
    $white = $red + 1;

// 全チーム数-1が全試合数になるため、全チーム数-1までデータ作成　　
    for($i=1;$i<$team_amount;$i++){

// 先鋒～大将まで繰り返す
    for($p=1;$p<6;$p++){
    $result = new result; 
    $result->kumiawase_id = $i;
    $result->position = $p;
    $result->red_team_id= 0;
    $result->white_team_id = 0;
    $result->one_tech= 0;
    $result->two_tech= 0;
    $result->three_tech= 0;
    $result->result= 0;

    // 1回戦の組み合わせには、シャッフルしたIDを登録していく
    if ($i<= $first_game){   
    $result->red_team_id= $value["$red"];
    $result->white_team_id = $value["$white"];
    };
    
    $result->save();
    };
    
    // 次のチーム取り出しに使用する
    $red = $red+2;
    $white = $red + 1;

    };
    
 
    return redirect('/kumiawase');
   
  }
  
  
 public function del(Task $task) {
  
 }
  
  
 //api画面表示用関数
public function api_test() {
   return view('api_test');
}
  
  
  
  
  
  
  
  
  
}
