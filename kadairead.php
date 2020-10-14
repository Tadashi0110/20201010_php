<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="border-collapse: collapse">
        <tr>
            <th>名前</th>
            <th>フリガナ</th>
            <th>メールアドレス</th>
            <th>パスワード</th>
        </tr>        
        
        <a href="index.html">戻る</a>
</body>
</html>



<?php
// ファイルを開く
$openfile =fopen ('./data/data.txt','r');

while (!feof($openfile)) {
    $text = fgets($openfile); // nl2br()は、改行をbrに変換する
    $array = explode(",", rtrim($text));
    if ($text != '') { // 最後の1行が改行により空になっているので、条件を入れる
        echo '<tr>';
        for ($i = 0; $i < count($array); $i++) {
            echo '<td>'.$array[$i].'</td>';
        }
        echo '</tr>';
    }
}


// ファイルを閉じる
fclose($openfile);
?>

