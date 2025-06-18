<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TargetWeightRequest;
use App\Http\Requests\EditRequest;
use App\Models\WeightTarget;
use App\Models\WeightLog;

class AdminController extends Controller
{

    //更新//
    public function update(TargetWeightRequest $request)
    {
        $user = auth()->user();

        $form = $request->only(['target_weight']);

        $target = $user->weightTarget;
        $target->update($form);

        return redirect('/admin');
    }

    //ログアウト後の遷移のため/
    public function admin()
    {
        return view('login');
    }

    //目標体重設定//
    public function goal()
    {
        return view('goal');
    }

 
    public function edit($id)
{
    $log = WeightLog::find($id);
    return view('edit', compact('log'));
}


    public function store(EditRequest $request)
    {
        $form = $request->all();
        WeightLog::create($form);
        return redirect('/admin');
    }

    public function destroy(Request $request)
    {
        WeightLog::find($request->id)->delete();
        return redirect('/admin');
    }




public function index(Request $request)
{
    $user = auth()->user();

    $target = $user->weightTarget;
    $latestLog = $user->weightLogs()->latest('date')->first();
    $logs = $user->weightLogs()
        ->when($request->date, fn($query) => $query->where('date', $request->date))
        ->orderBy('date', 'desc')
        ->paginate(8);

    return view('admin', compact('target', 'latestLog', 'logs'));
}

}
