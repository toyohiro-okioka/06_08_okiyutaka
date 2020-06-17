<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート集計（入力画面）</title>
</head>

<body>
  <form action="create.php" method="post">
    <fieldset>
      <legend>アンケート集計（入力画面）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        <!-- todo: <input type="text" name="todo"> -->
        名前: <input type="text" name="name">
      </div>
      <div>
        <!-- deadline: <input type="date" name="deadline"> -->
        e-mail: <input type="text" name="mail">
      </div>
      <div>
        質問: <input type="text" name="question">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>