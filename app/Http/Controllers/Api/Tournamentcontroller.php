<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Task;
use Validator;
use Auth;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
  
    //登録処理関数
    public function teamreg(Request $request) {
  
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
  
  return $players;

     
 }
  

   public function index() {
   
   $players = get();
//   $players = player::select()->join('teams','teams.team_id','=','players.team_id')->orderBy('players.team_id', 'asc')->orderBy('position', 'asc')->get();
  
   return $players;
   
   }
       
       
       

   public function destroy($task_id) {
 
   }

}