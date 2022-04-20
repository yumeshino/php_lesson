<?php
//スーパーグローバル変数 php 9種類
//連想配列になっている
//GET..アドレス通信にキーが表示される
//POST..アドレス通信に何も表示されない 表示されてはまずいもの（パスワードなど）のときに使う

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST); 
  echo '</pre>';
}

//入力、確認、完了 input.php,conform.php,thanks.php
//input.php

$pageFlag = 0;

if(!empty($_POST['btn_confirm'])){
  $pageFlag = 1;
}

if(!empty($_POST['btn_submit'])){
  $pageFlag = 2;
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>input</title>
</head>
<body>

<?php if($pageFlag === 1) : ?>
  <form method="POST" action="input.php">
    氏名
    <?php echo $_POST['your_name'];?>
    <br>
    メールアドレス
    <?php echo $_POST['email'];?>
    <br>
    <input type="submit" name="back" value="戻る">
    <input type="submit" name="btn_submit" value="送信する">
    <input type="hidden" name="your_name" value=" <?php echo $_POST['your_name'];?>">
    <input type="hidden" name="email" value=" <?php echo $_POST['email'];?>">
  </form>
<?php endif; ?>


<?php if($pageFlag === 2) : ?>
  送信が完了しました。
<?php endif; ?>


<?php if($pageFlag === 0) : ?>
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name" value="<?php if(!empty( $_POST['your_name'])){echo $_POST['your_name'];}?>">
    <br>
    メールアドレス
    <input type="email" name="email" value="<?php if(!empty( $_POST['email'])){echo $_POST['email'];}?>">
    <br>
    <input type="submit" name="btn_confirm" value="確認する" >
  </form>
  <?php endif; ?>


  
</body>
</html>