<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>音楽更新</title>
</head>
<body>
    <h2>音楽更新</h2>
    <a href="menyu.php">メニューに戻る</a>
    <table>
    <tr><th>音楽ID</th><th>楽曲名</th><th>アーティスト名</th><th></th></tr>
    <?php
    $pdo=new PDO('mysql:host=mysql219.phy.lolipop.lan;dbname=LAA1517361-final;charset=utf8','LAA1517361','0429');
    $sql=$pdo->prepare('select * from music where id = ?');
    $sql->execute([$_GET['id']]);
    $row=$sql->fetch();
    echo '<form action="kousin-output.php" method="post">';
    echo '<input type="hidden" name="id" value="',$row['id'],'">';
    echo '<p>楽曲名<input type="text" name="newsinger" value="',$row['name'],'"></p>';
    echo '<p>アーティスト名<input type="text" name="newsong" value="',$row['artist'],'"></p>';
    echo '<p><button type="submit" name="action" value="send">更新</button></p>';
    echo '</form>';
    ?>
</body>
</html>