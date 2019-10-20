<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GETでデータを送信する</title>
</head>

<body>
  <h1>GETでデータを送信する</h1>
  <p>お名前を入力してください</p>
  <form action="get_receive.php" method="get">
    <label for="">お名前</label>
    <input type="text" name="name">
    <label for="">趣味</label>
    <input type="text" name="hobby">
    <input type="submit" value="送信する">
  </form>
</body>
</html>