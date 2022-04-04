
<?php

//配列・・数字（順番固定）と値がセット
//$array[1]


//連想配列・・キーと値がセット
//キー => 値
//key => value
//$array ["key"]

//キーと値の部分は文字ならシングルクォーテーション、数字は何もいない
$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];


?>