<?php
$err = array();
$img = $_FILES['img'];
var_dump($img);
$type = exif_imagetype($img['tmp_name']);
if ($type !== IMAGETYPE_JPEG && $type !== IMAGETYPE_PNG) {
    $err['pic'] = '対象ファイルはPNGまたはJPGのみです。';
} elseif ($img['size'] > 204800) {
    $err['pic'] = 'ファイルサイズは200KB以下にしてください。';
} else {
    $extension = pathinfo($img['name'], PATHINFO_EXTENSION);
    $new_img = md5(uniqid(mt_rand(), true)). '.' .$extension;
    move_uploaded_file($img['tmp_name'], './img/' . $new_img);
}
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
    <?php if (count($err) > 0) {
        foreach($err as $row) {
            echo '<p>'.$row.'</p>';
        }
        echo '<a href="./send.php">戻る</a>';
    } else {
    ?>
    <div><img src="http://localhost:9000/8/img/<?php echo $img['name']; ?>"></div>
    <?php } ?>
</body>

</html>