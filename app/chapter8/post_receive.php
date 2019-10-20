<?php
// var_dump($_POST);
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8');
$sex = (int) $_POST['sex'];
$blood = $_POST['blood'];
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'utf-8');
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
	<p>性別は
		<?php
			if($sex === 1) {
				echo '男性';
			} else {
				echo '女性';
			}
		?>
	です。</p>
	<p>血液型は<?php echo $blood; ?>です。</p>
	<p>
		<?php echo nl2br($comment); ?>
	</p>
</body>

</html>