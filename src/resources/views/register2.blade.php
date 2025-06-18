<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register2.css')}}">
</head>
<body>

<div class="content">

<div class="register-form">
  <div class="register-form__inner">
    <form class="register-form__form" action="/add" method="post">
      @csrf
      <h1 class="register-form__heading content__heading">PiGLy</h1>
      <h2 class="content__heading">新規会員登録</h2>
      <h3 class="register-form__heading3">STEP2 体重データの入力</h3>
      <div class="register-form__group">
        <label class="register-form__label" for="weight">現在の体重</label>
        <div class="register-form__double">
            <input class="register-form__input" type="text" name="weight" id="weight" placeholder="現在の体重を入力">
            <span class=register-text>kg</span>
        </div>
        <p class="register-form__error-message">
          @error('weight')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="target_weight">目標の体重</label>
        <div class="register-form__double">
            <input class="register-form__input" type="text" name="target_weight" id="target_weight" placeholder="目標の体重を入力">
            <span class=register-text>kg</span>
        </div>
        <p class="register-form__error-message">
          @error('target_weight')
          {{ $message }}
          @enderror
        </p>
      </div>
      <input class="register-form__btn btn" type="submit" value="アカウント作成">
    </form>
  </div>
</div>
</div>

</body>
</html>




