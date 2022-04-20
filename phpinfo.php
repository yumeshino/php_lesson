<?php

//phpのバージョンや設定情報を確認できる
phpinfo();
//Configuration File (php.ini) Pathに記載されているファイル名から設定の変更が可能


//処理を止める処理
//コードが長くなった場合に変数の中に何の値が入っているかを確認する時などにexitを使って処理を止めて確認する
$test = 123;
$test_2 = 456;

echo $test;
var_dump($test);
exit;
echo $test_2;

?>