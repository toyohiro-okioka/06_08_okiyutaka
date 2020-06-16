<?php
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
$str = "";
// ファイルを開く処理
$file = fopen('data/todo.txt', 'r');

// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
// 1行づつ取り出す
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる
  }
}

// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイル閉じる
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>textファイル書き込み型todoリスト（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>todo <?= $str ?></th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </fieldset>
</body>

</html>