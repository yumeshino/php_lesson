
<?php

//階層が同じ場合の書き方
require 'common.php';
//階層が違う場合の書き方
// require '../common/common.php';

echo $commonVariable;

//マジック定数
//現在のファイルの絶対パスを表示してくれる
echo __DIR__;
//現在のファイルのありかまで表示してくれる
echo __FILE__;


commonTest();

?>