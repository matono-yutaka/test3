<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Register2Request;
use App\Models\WeightTarget;
use App\Models\WeightLog;

class AuthController extends Controller
{






    public function register()
    {
        return view('register2');
    }

    public function create(Register2Request $request)
    {
        $userId = auth()->id();
    // 目標体重を保存
    WeightTarget::create([
        'user_id' => $userId,
        'target_weight' => $request->input('target_weight'),
    ]);

    // 現在の体重をログとして保存
    WeightLog::create([
        'user_id' => $userId,
        'date' => now()->toDateString(), // 今日の日付
        'weight' => $request->input('weight'),
        'calories' => 0,
        'exercise_time' => '00:00:00', // 初期値
        'exercise_content' => '',
    ]);
        return redirect('/admin');
    }




}

