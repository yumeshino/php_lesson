<?php

//初期値は host が localhost、user が root、pass が root 
const DB_HOST = 'mysql:dbname=udemy_php;host=localhost;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'moyumi090611';


//例外処理 Exception
//データベースを繋ぐときにはお決まりの書き方
try{
  //$pdo = new PDO('mysql:host=localhost;dbname=example', 'root', 'root');

  // PDOとDBを繋ぐための実体化（インスタンス化）
  //４番目の引数はオプション・[]で配列形式で書く
  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [ 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//連想配列
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,//例外を表示※必須
    PDO::ATTR_EMULATE_PREPARES => false,//SQLインジェクション対策※必須
  ]);
  echo '接続成功';

} catch(PDOException $e){
  echo '接続失敗' . $e->getMessage() . "\n";
  exit(); //処理の抜け出し
}

?>

クラスの使い方（2パターン）
動的な使い方（アロー演算子） new
→newをというキーワードを使った方法
$pdo = nwe クラス名;
$pdo ->  プロパティ
$pdo -> メソッド

静的な使い方（スコープ演算子） static
→::（コロン2つ）使った方法
PDO::ATTR_ERRMODE


