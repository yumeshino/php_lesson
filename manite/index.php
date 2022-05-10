<?php

require 'db_connection.php';

//ユーザー入力なし  query
//SQL文が決まっていていつもと同じような文を打つ時はこっち
// $sql = 'select * from contacts where id = 2'; //sql
// $stmt = $pdo->query($sql); //sql実行 ステートメント

// $result = $stmt->fetchAll();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';



//ユーザー入力あり   prepare,bind,execute
  //悪意ユーザー delete * SQLインジェクション対策
//検索画面、お問い合わせフォームとかユーザーが入力する場合
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindvalue('id',4,PDO::PARAM_INT); //紐付け（ユーザーによって入力するから紐付けの必要がある）
$stmt->execute(); //実行

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

?>