@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
@endsection

@section('content')
<div class="admin">
    <div class="weight-group">
        <div class="weight-group__double">
        <p>目標体重</p>
        <p>{{ $target->target_weight ?? '未設定' }}kg</p>
        </div>
        <div class="weight-group__double">
        <p>目標まで</p>
        <p>@if(isset($latestLog, $target))
        {{ number_format($latestLog->weight - $target->target_weight, 1) }}kg
        @else
          未設定
        @endif
        </p>
        </div>
        <div class="weight-group__double">
        <p>最新体重</p>
        <p>{{ $latestLog->weight ?? '未入力' }}kg</p>
        </div>
    </div>

    <div class="admin-inner">
    <form class="search-form" action="" method="get">
    @csrf
        <div class="admin-inner__header">
            <input class="search-form__date" type="date" name="date" value="{{request('date')}}">
            <div class="search-form__actions">
            <input class="search-form__search-btn" type="submit" value="検索">
            <input class="search-form__add-btn btn" type="submit" value="データ追加" name="add">
            </div>
        </div>

    <table class="admin__table">
      <tr class="admin__row">
        <th class="admin__label">日付</th>
        <th class="admin__label">体重</th>
        <th class="admin__label">食事摂取カロリー</th>
        <th class="admin__label">運動時間</th>
        <th class="admin__label"></th>
      </tr>
      @foreach ($logs as $log)
      <tr class="admin__row">
        <td class="admin__data">{{ \Carbon\Carbon::parse($log->date)->format('Y/m/d') }}</td>
        <td class="admin__data">
        {{ $log->weight }}kg
        </td>
        <td class="admin__data">{{ $log->calories ?? '—' }}cal</td>
        <td class="admin__data">{{ \Carbon\Carbon::createFromFormat('H:i:s', $log->exercise_time)->format('H:i') }}</td>
        <td class="admin__data">
          <a class="admin__detail-btn" href="/edit/{{ $log->id }}">✏️</a>
        </td>
      </tr>
        @endforeach

      <div class="modal" id="">
        <a href="#!" class="modal-overlay"></a>
        <div class="modal__inner">
          <div class="modal__content">
            <form class="modal__detail-form" action="" method="post">
              @csrf
              <div class="modal-form__group">
                <label class="modal-form__label" for="">日付</label>
                <p>2025年6月17日</p>
              </div>

              <div class="modal-form__group">
                <label class="modal-form__label" for="">体重</label>
                <p>65kg
                </p>
              </div>

              <div class="modal-form__group">
                <label class="modal-form__label" for="">摂取カロリー</label>
                <p></p>
              </div>

              <div class="modal-form__group">
                <label class="modal-form__label" for="">運動時間</label>
                <p>30分</p>
              </div>

              <div class="modal-form__group">
                <label class="modal-form__label" for="">運動内容</label>
                <p>ゴルフ</p>
              </div>

             
             
              <input type="hidden" name="id" value="">
              <input class="modal-form__delete-btn btn" type="submit" value="削除">

            </form>
          </div>

          <a href="#" class="modal__close-btn">×</a>
        </div>
      </div>
    </table>
    </form>
    </div>

    <div class="pagination">
    {{ $logs->links() }}
    </div>

</div>
@endsection