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
    foreach ($pdo->query('select * from music') as $row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>', $row['artist'], '</td>';
        echo '<td><a href="kousin-input.php?id=', $row['id'], '">更新</a></td>';
        echo '</tr>';
        echo "\n";
    }
    ?>
</body>
</html>