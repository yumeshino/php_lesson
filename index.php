
<?php

//配列は基本的に変数に入れることが多い
//横が行、縦が列
//[]の中に入れる
//0から始まる

//配列1行
$array_1 = [1,2,3];

$array_2 = [
  ['赤','青','黄色'],
  ['緑','紫','黒']
];

echo'<pre>';//arrayの中身の表示を横書きから縦書きに表示させる
var_dump($array_2);
echo'</pre>';


//$array_2の紫を出したい場合
echo $array_2[1][1];



?>