<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class=1>編集画面</h1><br>
    <?php
        $pdo = new PDO($connect, USER, PASS);
        $sql = $pdo->prepare('select * from Music where music_id=?');
        $sql->bindValue(1,$_POST['music_id'],PDO::PARAM_INT);
        $sql->execute();
        foreach($sql as $row){
            echo '<form action="kousin.php" method="post">';
            echo '<input type="hidden" name="music_id" value=',$row['music_id'],'">';
            echo '曲名<input type="text" name="music_name" value="',$row['music_name'],'"><br>';
            echo 'アーティスト<input type="text" name="category" value="',$row['category'],'"><br>';
            echo '画像<input type="text" name="picture" value="',$row['picture'],'"><br>';
            // echo '動画URL<input type="text" name="URL" value="',$row['URL'],'"><br>';
            echo '<button class=sousin>編集する</button>';
            echo '</form>';
        }
    ?>
</body>
</html>