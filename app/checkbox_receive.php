<?php
$colors = $_POST['colors'];
?>

<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>チェックボックスの値を取得しよう</title>
</head>
<body>
  <h1>受信ページ</h1>
  <h3>好きな色</h3>
  <ul>
    <?php foreach ($colors as $var) {?>
    <li><?php echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8'); ?></li>
    <?php } ?>
  </ul>

  <p>あなたの好きな色は<?php echo implode('と',$colors); ?>です。</p>
</body>
</html>