<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <p>{{$txt}}</p>
  @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <form action="/" method="POST">
    <table>
      @csrf
      <tr>
        <th>名前</th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>役職</th>
        <td>
          <input type="text" name="role">
        </td>
      </tr>
      <tr>
        <th>メール</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
      <tr>
        <th>年齢</th>
        <td>
          <input type="text" name="age">
        </td>
      </tr>
      <tr>
        <th>登録日</th>
        <td>
          <input type="text" name="registered_at">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>