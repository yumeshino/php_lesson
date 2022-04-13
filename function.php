<?php

// 関数は2種類
// 組み込み関数・・準備してある関数
// ユーザー定義関数・・自由に作れる関数


// function test(引数1,引数2) {
  // 処理

  // return 戻り値;

// }



// インプット引数 なし
// アウトプット戻り値 なし
function test() {
  echo'テスト';
}

test();


// インプット引数 あり
// アウトプット戻り値 なし
$comment = 'コメント2';
$comennt3 = 'コメント3';

function getComment($string){
  echo $string;
}

getComment($comennt3);



// インプット引数 なし
// アウトプット戻り値 あり
function getNumberOfComment(){
  return  5;
}

$commentNumber = getNumberOfComment();

echo $commentNumber;


// 引数2つ
// 戻り値あり
function sumPrice($int1, $int2){
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3,5);

echo $total;
?>