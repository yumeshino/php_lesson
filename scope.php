<?php

//変数のスコープにはグローバルとローカルの2種類がある

$globalVariable = 'グローバル変数です';

//関数の中に入っている変数は関数の中でだけ使える
function checkScope(){
  $localVariable = 'ローカル変数です';
  echo $localVariable;
}

//$localVariableを表示させたい場合はその関数を呼び出す
checkScope();

//グローバル変数をスコープ内で表示させたい場合
//引数をインプットで表示させる
function checkScope2($str){
  $localVariable = 'ローカル変数です';
  echo $str;
}

checkScope2($globalVariable);

echo $globalVariable;

?>