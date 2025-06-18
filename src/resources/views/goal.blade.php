@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goal.css') }}">
@endsection

@section('content')


<div class="register-form">
  <div class="register-form__inner">
    <form class="register-form__form" action="/weight_logs/goal_setting" method="post">
      @csrf
      <h1 class="register-form__heading">目標体重設定</h1>
      <div class="register-form__group">
        <div class="register-form__double">
            <input class="register-form__input" type="text" name="target_weight" id="target_weight" placeholder="目標体重">
            <span class=register-text>kg</span>
        </div>
        <p class="register-form__error-message">
          @error('target_weight')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="button-group">
        <a class="login__link" href="/admin">戻る</a>
        <input class="register-form__btn btn" type="submit" value="更新">
      </div>
    </form>
  </div>
</div>


@endsection