<!-- クッキーとセッション

CSRF対策
$_GET
$_POST
一回きりの画面遷移

$_SESSION
上記の一回きりの画面遷移に対してずっと残る
その性質からAmazonなどの会員システムのログインしたままなどに使われる


クッキーとセッションの違い
$_SESSION
サーバー側で情報を管理

$_COOKIE
パソコンやスマホに入っているブラウザ毎に情報が保存される。なのでパスワードの保存はNG -->


<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head></head>
<body>
  
  <?php
  if(!isset($_SESSION['visited'])){
    echo '初回訪問です';

    $_SESSION['visited'] = 1;
    $_SESSION['date'] = date('c');
  }else{

    $visited = $_SESSION['visited'];
    $visited++;
    $_SESSION['visited'] = $visited;

    echo $_SESSION['visited'].'回目の訪問です<br>';

    if(isset($_SESSION['date'])){
      echo '前回訪問は'.$_SESSION['date'].'です';
      $_SESSION['date'] = date('c');
    }

    // setcookie("id",'aaa',time() - 1800,'/');

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    //セッションを生成したタイミングでクッキーも自動で生成される
    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
  }

 
  ?>
</body>
</html>







