<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
}

$dsn = 'pgsql:dbname=sample;host=pgsql;port=5432';
$user = 'postgres';
$password = 'example';

$data = [];

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT id, name FROM public.user WHERE name like :name";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':name', '%' . $name . '%', PDO::PARAM_STR);
  $stmt->execute();
  $count = $stmt->rowCount();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;

  // $dbh = new PDO($dsn, $user, $password);
  // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $sql = "SELECT id, name FROM user WHERE name LIKE :name";
  // $stmt = $dbh->prepare($sql);
  // $stmt->bindValue(':name', '%'.$name.'%', PDO::PARAM_STR);
  // $stmt->execute();
  // $count = $stmt->rowCount();
  // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   $data[] = $row;
  }
  echo '処理が完了しました。';
} catch (PDOException $e) {
  echo ($e->getMessage());
  die();
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>会員データ一覧</title>
</head>

<body>
  <h1>会員データ一覧</h1>
  <p><?php echo $count; ?>件見つかりました。</p>
  <table border="1">
    <tr><th>id</th><th>名前</th></tr>
    <?php foreach ($data as $row): ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>