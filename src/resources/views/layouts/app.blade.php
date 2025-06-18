<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PiGLy</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}"/>
  <link rel="stylesheet" href="{{ asset('css/common.css')}}">
  @yield('css')
</head>

<body>
  <div class="app">
    <header class="header">
      <h1 class="header__heading">PiGLy</h1>
        <div class="header__double">
            <a class="header__link" href="/weight_logs/goal_setting">目標体重設定</a>
            <form action="/logout" method="post">
            @csrf
            <input class="header__link" type="submit" value="ログアウト">
            </form>
        </div>
    </header>
    <div class="content">
      @yield('content')
    </div>
  </div>
</body>

</html>