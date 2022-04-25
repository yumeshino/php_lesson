<?php


session_start();

//クリックジャッキングの対策の為のコード
header('X-FRAME-OPTIONS:DENY');
//スーパーグローバル変数 php 9種類
//連想配列になっている
//GET..アドレス通信にキーが表示される
//POST..アドレス通信に何も表示されない 表示されてはまずいもの（パスワードなど）のときに使う

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST); 
  echo '</pre>';
}

//フォームセキュリティ
  // 代表的な攻撃と対策
    // XXS（cross–site scripting）
    // クリックジャッキング
    // CRSF（cross–site request forgeries）
    // SQLインジェクション->DB時
    // etc...
  // 対策：サニタイズ（消毒）、バリテージョン（検証）


  // CSER対策
  // $_GET
  // $_POST・・一回きり

  // $_SESSION・・残る
  // →$_SESSIONを使ったトークンを発行両方で
  //文字・・・・・・未入力、文字数
  
  //バリテージョン
    //HTML5側とサーバー側両方で
      // メールアドレス・・未入力、一つだけか
      // 性別などの選択項目・・未入力
      // 郵便番号・電話番号・カナ。etc
  


//サニタイズのための専用コード
function h($str)
{
  return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}




//入力、確認、完了 input.php,conform.php,thanks.php
// CSER 偽物のinput.php->悪意のあるページ
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
  <?php if($_POST['csrf'] === $_SESSION['csrfToken']):?>
  <form method="POST" action="input.php">
    氏名
    <?php echo h($_POST['your_name']);?>
    <br>
    メールアドレス
    <?php echo h($_POST['email']);?>
    <br>
    ホームページ
    <?php echo h($_POST['url']);?>
    <br>
    性別
    <?php
    if($_POST['gender'] === '0'){ echo '男性';}
    if($_POST['gender'] === '1'){ echo '女性';}
    ?>
    <br>
    年齢
    <?php
      if($_POST['age'] === '1'){ echo'〜19歳';}
      if($_POST['age'] === '2'){ echo'20〜29歳';}
      if($_POST['age'] === '3'){ echo'30〜39歳';}
      if($_POST['age'] === '4'){ echo'40〜49歳';}
      if($_POST['age'] === '5'){ echo'50〜59歳';}
      if($_POST['age'] === '6'){ echo'60〜69歳';}
    ?>
    お問い合わせ内容
    <?php echo h($_POST['contact']);?>
    <input type="submit" name="back" value="戻る">
    <input type="submit" name="btn_submit" value="送信する">
    <input type="hidden" name="your_name" value=" <?php echo h($_POST['your_name']);?>">
    <input type="hidden" name="email" value=" <?php echo h($_POST['email']);?>">
    <input type="hidden" name="url" value=" <?php echo h($_POST['url']);?>">
    <input type="hidden" name="gender" value=" <?php echo h($_POST['gender']);?>">
    <input type="hidden" name="age" value=" <?php echo h($_POST['age']);?>">
    <input type="hidden" name="contact" value=" <?php echo h($_POST['contact']);?>">
    <input type="hidden" name="csrf" value=" <?php echo h($_POST['csrf']);?>">
  </form>
<?php endif; ?>

<?php endif; ?>


<?php if($pageFlag === 2) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']):?>
  送信が完了しました。

<?php unset($_SESSION['csrftokne']); ?>
<?php endif; ?>
<?php endif; ?>


<?php if($pageFlag === 0) : ?>
<!-- 暗号的に安全な、擬似ランダムなバイト列を生成するコード -->
  <?php
  if(!isset($_SESSION['csrfToken'])){
    $csrfToken = bin2hex(random_bytes(32));
    $_SESSION['csrfToken'] = $csrfToken;
  }
  $token = $_SESSION['csrfToken'] = $csrfToken;
  ?>
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name" value="<?php if(!empty( $_POST['your_name'])){echo h($_POST['your_name']);}?>">
    <br>
    メールアドレス
    <input type="email" name="email" value="<?php if(!empty( $_POST['email'])){echo h($_POST['email']);}?>">
    <br>
    ホームページ
    <input type="url" name="url" value="<?php if(!empty( $_POST['url'])){echo h($_POST['url']);}?>">
    <br>
    性別
    <input type="radio" name="gender" value="0" 
    <?php if(!empty( $_POST['gender']) && $_POST['gender'] === '0')
    {echo 'checked';}?>>男性
    <input type="radio" name="gender" value="1"
    <?php if(!empty( $_POST['gender']) && $_POST['gender'] === '1')
    {echo 'checked';}?>>女性
    <br>
    年齢
    <select name="age">
      <option value="0">選択してください</option>
      <option value="1">〜19歳</option>
      <option value="2">20〜29歳</option>
      <option value="3">30〜39歳</option>
      <option value="4">40〜49歳</option>
      <option value="5">50〜59歳</option>
      <option value="6">60〜69歳</option>
    </select>
    <br>
    お問い合わせ内容
    <textarea name="cotact">
      <?php if(!empty( $_POST['contact'])){echo h($_POST['contact']);}?>
    </textarea>
    <br>
    <input type="checkbox" name="caution" value="1"> 注意事項にチェックする
    <br>

    <input type="submit" name="btn_confirm" value="確認する" >
    <input type="hidden" name="csrf" value="<?php echo $token; ?>">
  </form>
  <?php endif; ?>


  
</body>
</html>