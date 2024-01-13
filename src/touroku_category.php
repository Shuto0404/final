<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 class="title">登録画面</h1><br>
    <form action="home_insert.php" method="post">
        曲名<input type="text" name="music_name" ><br>
        アーティスト名
        <select name="category"><!-- カテゴリの選択 -->
            <?php
            $pdo = new PDO($connect, USER, PASS);
            $sql = $pdo->query('SELECT DISTINCT category FROM Music');
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['category'] . '">' . $row['category'] . '</option>';
            }
            ?>
        </select><br>
        動画リンク<input type="text" name="picture" ><br>
        <!-- 動画URL<input type="text" name="URL" ><br> -->
   
        <button class="sousin">登録</button>
    </form>
</body>
</html>
