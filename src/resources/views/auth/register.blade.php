<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ユーザ登録フォーム</h1>
  <form action="/auth/register" name="registform" method="post">
    {{csrf_field()}}
    <p>
      <label for="">名前</label>
      <input type="text" name="name" size="30">
      <span>
        {{$errors->first('name')}}
      </span>
    </p>
    <p>
      <label for="">メールアドレス</label>
      <input type="text" name="email" size="30">
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
    <p>
      <label for="">パスワード</label>
      <input type="password" name="password_confirmation" size="30">
      <span>
        {{$errors->first('password_confirmation')}}
      </span>
    </p>
    <button type="submit" name="action" value="send">送信</button>
  </form>
</body>
</html>