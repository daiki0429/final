<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pdo=new PDO('mysql:host=mysql219.phy.lolipop.lan;dbname=LAA1517361-final;charset=utf8','LAA1517361','0429');
    $sql=$pdo->prepare('delete from music where id=?');
    if ($sql->execute([$_GET['id']])) {
        echo '削除に成功しました。';
    } else {
        echo '削除に失敗しました。';
    }
    ?>
</body>
</html>