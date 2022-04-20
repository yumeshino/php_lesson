<?php

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST); 
  echo '</pre>';
}

//スーパーグローバル変数 php 9種類
//連想配列になっている
//GET..アドレス通信にキーが表示される
//POST..アドレス通信に何も表示されない 表示されてはまずいもの（パスワードなど）のときに使う
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>input</title>
</head>
<body>
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="yuor_name">
    <br>
    <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バスケ">バスケ

    <input type="submit" value="送信">

  </form>
  
</body>
</html>