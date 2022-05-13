<?php

//DB接続 PDO
function insertContact($request){
require 'db_connection.php';

//入力 DB保存 prepare,bind,execute(配列(全て文字列))
//入力画面で全て文字列の場合はbindは不要になる

$params = [
  'id' => 'null',
  'your_name' => $request['your_name'],
  'email' => $request['email'],
  'url' => $request['url'],
  'gender' => $request['gender'],
  'age' => $request['age'],
  'contact' => $request['contact'],
  'created_at' => 'null',
];

// $params = [
//   'id' => 'null',
//   'yuor_name' => 'なまえ',
//   'email' => 'test@test.com',
//   'url' => 'http://test.com',
//   'gender' => '1',
//   'age' => '2',
//   'contact' => 'いいい',
//   'created_at' => 'null',
// ];

$count = 0;
$columns = '';
$values = '';

//array記述で上記の連想配列の左側の部分を持ってくることができる
//columnsが左側の部分
//valuesが名前つきプレースホルダー
foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .=',';
    $values .= ',';
  }
  $columns .=$key;
  $values .=':'.$key;
}

$sql = 'insert into contacts ('. $columns . ')values('. $values . ')'; //名前付きプレースホルダー

// var_dump($sql);
// exit;//ここでexitとすると処理が止まるのでDBには保存されないことになる

$stmt = $pdo->prepare($sql); //プリペアードステートメント

$stmt->execute($params); //実行

}

?>