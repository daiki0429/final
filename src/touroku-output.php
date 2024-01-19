<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録結果</title>
</head>
<body>
<a href="menyu.php">メニューに戻る</a>
    <?php
    $pdo=new PDO('mysql:host=mysql219.phy.lolipop.lan;dbname=LAA1517361-final;charset=utf8','LAA1517361','0429');
    $sql=$pdo->prepare('insert into music values(null, ?, ?)');
    if ($sql->execute([$_POST['newsinger'], $_POST['newsong']])) {
        echo '追加に成功しました。';
    } else {
        echo '追加に失敗しました。';
    }
    ?>
</body>
</html>