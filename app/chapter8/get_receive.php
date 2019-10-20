<?php
$name = $_GET['name'];
$hobby = $_GET['hobby'];
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>受信ページ</title>
</head>

<body>
  <h1>受信ページ</h1>
  <p>あなたの名前は<?php echo $name; ?>さんです。</p>
  <p>あなたの趣味は<?php echo $hobby; ?>です。</p>
</body>
</html>