@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css')}}">
@endsection

@section('content')
<div class="register-form">
<h2 class="register-form__heading content__heading">Weight Log</h2>
  <div class="register-form__inner">
    <form class="register-form__form" action="/edit" method="post">
      @csrf
      <div class="register-form__group">
        <label class="register-form__label" for="date">日付</label>
        <input class="register-form__input" type="text" name="date" value="{{ old('date', $log->date) }}" id="">
        <p class="register-form__error-message">
          @error('date')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="weight">体重</label>
        <div class="register-form__double">
        <input class="register-form__input" type="text" name="weight" value="{{ old('weight', $log->weight) }}" id="">
        <span class=register-text>kg</span>
        </div>
        <p class="register-form__error-message">
          @error('weight')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="calories">摂取カロリー</label>
        <div class="register-form__double">
        <input class="register-form__input" type="text" name="calories" value="{{ old('calories', $log->calories) }}" id="">
        <span class=register-text>cal</span>
        </div>
        <p class="register-form__error-message">
          @error('calories')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="exercise_time">運動時間</label>
        <input class="register_form__input-time" type="text" name="exercise_time" value="{{ old('exercise_time', $log->exercise_time) }}" id="">
        <p class="register-form__error-message">
          @error('exercise_time')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="exercise_content">運動内容</label>
        <textarea class="register-form__input-text"  name="exercise_content" id="">{{ old('exercise_content', $log->exercise_content) }}</textarea>
        <p class="register-form__error-message">
          @error('exercise_content')
          {{ $message }}
          @enderror
        </p>
      </div>
    <div class="button-wrapper">
      <div class="button-group">
        <a class="login__link" href="/admin">戻る</a>
        <input class="register-form__btn btn" type="submit" value="更新">
      </div>
    </form>

    <form action="/delete" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $log->id }}">
        <button type="submit" onclick="return confirm('本当に削除しますか？')" class="delete-button">🗑</button>
    </form>
    </div>
  </div>
</div>
@endsection('content')