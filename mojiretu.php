<?php

// 文字列の長さ
// マルチバイト
//日本語 SJIS, UTF-8 3〜6バイト
$text = 'あいうえお';

//echo strlen($text);

echo mb_strlen($text);



//文字列の置換
$str = '文字列を置換します';

echo str_replace('置換','ちかん',$str);



//指定文字列で分割

$str_2 = '指定文字列で、分割します';

echo'<pre>';
var_dump(explode('、', $str_2));
echo'</pre>';

//implode 文字列をくっつける



//正規表現 
// 文字かどうか
// 数字かどうか
// 郵便番号
// メールアドレスかどうか test@gmail.com

$str_3 = '特定の文字列が含まれているか確認する';

echo preg_match('/文字列/',$str_3);



//指定文字列から文字列を取得する
//マルチバイト
echo substr('あいう',2);

echo mb_substr('かきくけこ',2);
?>