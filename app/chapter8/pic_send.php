<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>画像アップ</title>
</head>

<body>
    <h1>画像アップ</h1>
    <form action="pic_receive.php" method="post" enctype="multipart/form-data">
        <p><input type="file" name="img"></p>
        <p><input type="submit" value="送信"></p>
    </form>
</body>

</html>