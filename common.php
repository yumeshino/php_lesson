<?php

$commonVariable = "共通の関数です";


function commonTest(){
  echo'外部ファイルの関数です';
}

// require();require_once();// エラー出ると処理が止まる
// include();include_oncce();//警告が出て処理が続けられる

// __DIR__ __FILE__マジック定数

//他の方法で名前空間(namespace)もあり
// ・・Laravelなどのフレームワークはこちらが主流

?>