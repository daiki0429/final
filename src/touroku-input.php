<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>音楽登録</title>
</head>
<body>
    <h2>音楽登録</h2>
    <a href="menyu.php">メニューに戻る</a>
    <form action="touroku-output.php" method="post">
    <p>楽曲名<input type="text" name="newsinger"></p>
    <p>アーティスト名<input type="text" name="newsong"></p>
    <p><button type="submit" name="action" value="send">登録</button></p>
    </form>
</body>
</html>