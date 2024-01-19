<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新結果</title>
</head>
<body>
<a href="menyu.php">メニューに戻る</a>
    <?php
    $pdo=new PDO('mysql:host=mysql219.phy.lolipop.lan;dbname=LAA1517361-final;charset=utf8','LAA1517361','0429');
    $sql=$pdo->prepare('update music set name = ?, artist = ? where id = ?');
    if (empty($_REQUEST['newsinger'])) {
        echo '楽曲名を入力してください。';
    } else
    if (empty($_REQUEST['newsong'])) {
        echo 'アーティスト名を入力してください。';
    } else
    if ($sql->execute([($_POST['newsinger']), $_POST['newsong'],$_POST['id']]
    )) {
        echo '更新に成功しました。';
    } else {
        echo '更新に失敗しました。';
    } 
    ?>
</body>
</html>