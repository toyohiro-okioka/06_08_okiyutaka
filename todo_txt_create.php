<?php
// var_dump($_POST);
// exit();

// データの受取
$todo = $_POST['todo'];
$deadline = $_POST['deadline'];

// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = "{$todo} {$deadline}\n";

// ファイルを開く処理
$file = fopen('data/todo.txt', 'a');

// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
fwrite($file, $write_data);

// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイルを閉じる処理
fclose($file);

// 入力画面へ移動
header("Location:todo_txt_input.php");

// txtファイルへの書き込みのみ行うので表示する画面は存在しない
