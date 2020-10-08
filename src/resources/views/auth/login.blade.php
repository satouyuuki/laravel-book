<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ログインフォーム</h1>
  @isset($message)
    <p style="color:red;">{{$message}}</p>
  @endisset
  <form action="/auth/login" name="loginform" method="post">
    {{csrf_field()}}
    <p>
      <label for="">メールアドレス</label>
      <input type="text" name="email" size="30" value="{{old('email')}}">
      <span>
        {{$errors->first('email')}}
      </span>
    </p>
    <p>
      <label for="">パスワード</label>
      <input type="password" name="password" size="30">
      <span>
        {{$errors->first('password')}}
      </span>
    </p>
    <button type="submit" name="action" value="send">送信</button>
  </form>
</body>
</html>