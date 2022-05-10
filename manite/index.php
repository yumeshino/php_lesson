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



//トランザクション まとまって処理してくれる biginTransaction,commit, rollback
//データベースに置いてもう一つの大切な処理
//ex)銀行 残高を確認->Aさんから引き落とし->Bさんに振り込み
//catchのあとは予め決まっている

$pdo->beginTransaction();

try{

  //sql処理
  $stmt = $pdo->prepare($sql); //プリペアードステートメント
  $stmt->bindvalue('id',4,PDO::PARAM_INT); //紐付け
  $stmt->execute(); //実行

  $pdo->commit();

}catch(PDOException $e){

  $pdo->rollBack(); //更新のキャンセル

}

?>