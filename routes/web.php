<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\player;
use App\team;
use App\match;
use App\result;
use Illuminate\Http\Request;



// ポータル　表示処理の作成
Route::get('/', 'Tournamentcontroller@portal');

// 試合結果　表示処理の作成
Route::get('/result', 'Tournamentcontroller@result');

// チーム情報登録画面表示　
Route::get('/team_store','Tournamentcontroller@team_store');
    
// 組み合わせ表　表示処理の作成
Route::get('/kumiawase', 'Tournamentcontroller@kumiawase');

// 試合結果登録　表示処理の作成
Route::get('/result_store', 'Tournamentcontroller@result_store');

// 試合結果　登録処理の作成
Route::post('/kekka',  'Tournamentcontroller@kekkareg');
    
// チーム情報 表示処理の作成
Route::get('/team','Tournamentcontroller@team');

// チーム情報　登録処理の作成
Route::post('/team', 'Tournamentcontroller@teamreg');

// 組み合わせ表　作成処理の作成
Route::get('/kumiawase_make', 'Tournamentcontroller@teammake');

// 削除処理の作成
Route::post('/task/{task}', 'Tournamentcontroller@del');

//apiページ表示処理
Route::get('/api_test', 'Tournamentcontroller@api_test');

Auth::routes();

Route::get('/home', 'Tournamentcontroller@portal');
