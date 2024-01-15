<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>音楽削除</h2>
    <tr><th>音楽ID</th><th>楽曲名</th><th>アーティスト名</th></tr>
    while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{row['categoryid']</td>
            <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
          </tr>";
            }
    <button type="submit" name="delete-result">削除</button>
</body>
</html>
