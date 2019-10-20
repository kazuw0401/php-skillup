<?php

$id = '';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}

$dsn = 'pgsql:dbname=sample;host=pgsql;port=5432';
$user = 'postgres';
$password = 'example';
$data = [];

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = <<<SQL
SELECT public.user.name,
    public.user.age,
    public.club.club_name,
    public.club.count,
    public.club.overview
FROM public.user
JOIN public.club ON public.user.club_id = public.club.club_id
WHERE public.user.id = :id
LIMIT 1
SQL;

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row);
} catch (Exception $e) {
    echo ('接続エラー：' . $e->getMessage());
    die();
}

?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会員データ</title>
    <style type="text/css">
        .search {
            float: right;
        }
    </style>
</head>

<body>
    <div class="search">
        <p>会員IDを入力してください</p>
        <form action="" method="get">
            <input type="text" name="id">
            <input type="submit" value="確認する">
        </form>
    </div>
    <h1>会員データ</h1>
    <?php if($row === FALSE): ?>
    <p>存在しない会員IDです。</p>
    <?php else: ?>
    <table border="1">
        <tr>
            <th>お名前</th>
            <th>年齢</th>
            <th>クラブ</th>
            <th>月の活動回数</th>
            <th>概要</th>
        </tr>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['club_name']; ?></td>
            <td><?php echo $row['count']; ?></td>
            <td><?php echo nl2br($row['overview']); ?></td>
        </tr>
    </table>
    <?php endif; ?>
</body>

</html>