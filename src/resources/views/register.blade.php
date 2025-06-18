<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
</head>
<body>

<div class="content">

<div class="register-form">
  <div class="register-form__inner">
    <form class="register-form__form" action="/register" method="post">
      @csrf
      <h1 class="register-form__heading content__heading">PiGLy</h1>
      <h2 class="content__heading">新規会員登録</h2>
      <h3 class="register-form__heading3">STEP1 アカウント情報の登録</h3>
      <div class="register-form__group">
        <label class="register-form__label" for="name">お名前</label>
        <input class="register-form__input" type="text" name="name" id="name" placeholder="例：山田 太郎">
        <p class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="email">メールアドレス</label>
        <input class="register-form__input" type="mail" name="email" id="email" placeholder="例：test@example.com">
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
      <input class="register-form__btn btn" type="submit" value="次に進む">
      <a class="login__link" href="/login">ログインはこちら</a>
    </form>
  </div>
</div>
</div>

</body>
</html>




