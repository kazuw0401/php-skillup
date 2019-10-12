<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POSTのサンプル</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <h1>POSTのサンプル</h1>
  <?php

  if (isset($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
    print("あなたのお名前は「 ${name} 」です。<br>");
  }
  if (isset($_POST["comment"])) {
    $comment = htmlspecialchars($_POST["comment"], ENT_QUOTES, "UTF-8");
    print("あなたのコメントは「 ${comment} 」です。<br>");
  }
  if (isset($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
    print("メールアドレスは「 ${email} 」です。<br>");
  }
  if (isset($_POST["name"])) {
    $sentence = htmlspecialchars($_POST["sentence"], ENT_QUOTES, "UTF-8");
    print("本文は「 ${sentence} 」です。<br>");
  } else {
    ?>
    <form action="index.php" method="post">
      <p>お名前を教えてください。</p>
      <input type="text" name="name">
      <p>コメントしてください。</p>
      <input type="text" name="comment">
      <p>メールアドレスを入力してください。</p>
      <input type="email" name="email" id="">
      <p>本文を入力してください。</p>
      <textarea name="sentence" id="" cols="50" rows="10"></textarea>
      <input type="submit" value="送信">
    </form>
  <?php
  }
  ?>
</body>

</html>