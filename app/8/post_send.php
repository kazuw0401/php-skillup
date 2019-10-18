<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POSTでデータを送信する</title>
</head>

<body>
  <h1>POSTでデータを送信する</h1>
  <p>プロフィールで登録しよう</p>
  <form action="post_receive.php" method="post">
    <p>名前：<input type="text" name="name"></p>
    <p>性別：<input type="radio" name="sex" value="1">男
      <input type="radio" name="sex" value="2">女</p>
    <p>
      血液型：<select name="blood" id="">
        <option value="A">A型</option>
        <option value="B">B型</option>
        <option value="O">O型</option>
        <option value="AB">AB型</option>
      </select>
    </p>
    <p>
      ひとこと<br>
      <textarea name="comment" id="" cols="40" rows="4"></textarea>
    </p>
    <p><input type="submit" value="送信"></p>
  </form>
</body>

</html>