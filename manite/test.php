<!-- ベーシックの認証の設定ファイル
htaccessファイルで指定
・・サーバー（Apache）の設定ファイル
ディレクトリ毎に動作を制御できる
・リダイレクト
・アクセス切替（pc版とスマホ版など）
・特定ipアドレス、プロバイダからのアクセス制御
・ベーシック認証etc、、、、、 -->


<?php
//パスワードを記録したファイルの場所
// echo __FILE__;
// /Applications/MAMP/htdocs/php_test/manite/test.php

// echo '<br>';
//パスワード（暗号化）
//第一引数に実際のパスワード、第二引数にパウワードの暗号化のタイプ
// echo(password_hash('password123',PASSWORD_BCRYPT));

// -----------------------------------------------------------------
// phpでデータを保存する方法
// ・ファイル（テキストファイル）
//     ->手軽・データのやりとり

// ・データベース（MySQL、MariaDB）
//     ->大量のデータを保管


// ファイルの操作
// ・ファイル名型（ファイル丸ごと）
//     ->file_get_contents,file_put_contents
// ・ストリーム型（一行ごと）
//     ->fopen,fclose,fgets.fwrite
// ・オブジェクト型（オブジェクトとして）
//     ->SpFileObject    


// $contactFile = '.contact.dat';

//ファイル丸ごと読み込み
// $fileContents = file_get_contents($contactFile);

// echo $fileContents;

//ファイルに読み込み（上書き）
// file_put_contents($contactFile,'テストです');

//追加する文章を改行したい場合
// $addText = 'テストです' . "\n";

//ファイルに書き込み（追記）
// file_put_contents($contactFile, $addText ,FILE_APPEND);


//配列 file , 区切る explode,  foreach
// $allDate = file($contactFile);

// foreach($allDate as $lineDate){
//   $lines = explode(',',$lineDate);
//   echo $lines[0].'<br>';
//   echo $lines[1].'<br>';
//   echo $lines[2].'<br>';
// }

// -----------------------------------------------------------
//phpファイルの操作機能

$contactFile = '.contact.dat';

$contents = fopen($contactFile,'a+');

$addText = '1行追記' . "\n";

fwrite($contents,$addText);

fclose($contents);

//ファイル操作の流れ（ストリーム型）
// 1,開く fopen(r,w,a)
// 2,排他ロック flock
// 3,読込/書込/追記 fgets/fwrite
// 4,閉じる fclose（ロック解除）


?>