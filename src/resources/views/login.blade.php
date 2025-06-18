<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
</head>
<body>

<div class="content">

<div class="register-form">
  <div class="register-form__inner">
    <form class="register-form__form" action="/login" method="post">
      @csrf
      <h1 class="register-form__heading content__heading">PiGLy</h1>
      <h2 class="content__heading">ログイン</h2>
      <div class="register-form__group">
        <label class="register-form__label" for="email">メールアドレス</label>
        <input class="register-form__input" type="email" name="email" id="email" placeholder="例：test@example.com">
        <p class="register-form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="password">パスワード</label>
        <input class="register-form__input" type="password" name="password" id="password">
        <p class="register-form__error-message">
          @error('password')
          {{ $message }}
          @enderror
        </p>
      </div>
      <input class="register-form__btn btn" type="submit" value="ログイン">
      <a class="login__link" href="/register">アカウント作成はこちら</a>
    </form>
  </div>
</div>
</div>

</body>
</html>
