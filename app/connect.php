<?php
// 新たにテキストを見て作成
$dsn = 'pgsql:dbname=sample;host=pgsql;port=5432';
$user = 'postgres';
$password = 'example';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // pgsqlでの書き方
  $sql = "INSERT INTO public.user(
	name, age, email)
  VALUES ('田中三郎', 28, 'sample5@sample5.com')";
  // MySQLでの書き方
  // $sql =　"INSERT INTO user(name, age, email) VALUES('田中三郎',28,'sample5@sample5.com')";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  echo "接続に成功しました。";
} catch (PDOException $e) {
  print($e->getMessage());
  die();
}


?>