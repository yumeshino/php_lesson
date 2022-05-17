<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head></head>
<body>
  
  <?php
  
  echo 'セッションを破棄しました';

  $_SESSION = [];

  if(isset($_COOKIE['PHPSESSID'])){
    setcookie('PHPSEID','',time() - 1800,'/');
  }

  session_destroy();

  echo 'セッション';
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

  echo 'クッキー';
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

  ?>
</body>
</html>