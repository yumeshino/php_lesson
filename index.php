
<?php
//条件分岐

//if(elseはできるだけ使わない)
//foreach(配列の抽出)

//if (条件) {
//条件が真なら実行
// } 

// if(条件) {
//   条件が真なら実行
// } else {
//   条件が偽なら実行
// }



$height = 91;

//!= 〜ではなかったら

if ($height !== 90){//型が同じかどうか
  echo '身長は90cmではありません。';
}
//データが入っているかどうか
//iseet empty is_null

$test = '1';//文字

if(!empty($test)){
  echo'変数は空ではありません';
}

//AND(&&) と OR(||)

$signal_1 = 'red';
$signal_2 = 'blue';

if($signal_1 === 'red' || $signal_2 === 'blue'){
  echo'赤です';
}

// 三項演算子
//if else
// 条件 ? 真 : 偽

$math = 80;

// =がついていないと80は含まない点に注意
$comment = $math > 80 ? 'good' : 'not good';

echo $comment;
?>