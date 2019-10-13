<?php
$dsn = 'pgsql:dbname=sample;host=pgsql;port=5432';
$user = 'postgres';
$password = 'example';
$id = 3;
$email = 'prepare@statement.com';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE public.user
	SET email=:email
	WHERE id = :id";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();
  echo "処理が完了しました。";
} catch (PDOException $e) {
  print($e->getMessage());
  die();
}
