<?php
// 受取処理
$name = $_POST['name'];
$name2 =$_POST['name2'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];


// ファイルに書き込み
$time = date("Y/m/d H:i:s");
$str = $time.' '.$name.' '.$name2.' '.$mail.' '.$pass;


//文字作成

// $file = fopen('./data/data.txt','a');
// fwrite($file, $str."\n");
// fclose($file);
$file = fopen('./data/data.txt','a');
fwrite($file, $name.",");
fwrite($file, $name2.",");
fwrite($file, $mail.",");
fwrite($file, $pass."\n");
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>アカウント情報登録</title>
</head>

<body>

<p><b>この内容で送信してよろしいですか？</b></p>
    <p>名前：<?= $name ?></p>
    <p>フリガナ：<?= $name2 ?></p>
    <p>メールアドレス：<?= $mail ?></p>
    <p>パスワード：<?= $pass ?></p>

<button onClick="history.back();">修正する</button>
<button onClick="location.href = 'kadairead.php'">送信する</button>

</body>

</html>
