<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



// 初期表示（ログアウト後など）
Route::get('/', [AdminController::class, 'admin'])->name('home');

// 登録ステップ2（入力確認画面など）
Route::get('/register/step2', [AuthController::class, 'confirm']);





Route::middleware('auth')->group(function () {

    // 体重ログ入力フォーム表示
    Route::get('/weight_logs', [AuthController::class, 'register']);

    // 体重ログ登録処理
    Route::post('/add', [AuthController::class, 'create']);

    // 目標体重設定ページ
    Route::get('/weight_logs/goal_setting', [AdminController::class, 'goal']);

    // 目標体重設定更新
    Route::post('/weight_logs/goal_setting', [AdminController::class, 'update']);

    // 管理画面（体重ログ一覧など）
    Route::get('/admin', [AdminController::class, 'index']);

    // 編集画面表示
    Route::get('/edit/{id}', [AdminController::class, 'edit']);

    // 編集フォーム送信処理
    Route::post('/edit', [AdminController::class, 'store']);

    // 削除処理
    Route::delete('/delete', [AdminController::class, 'destroy']);
});
