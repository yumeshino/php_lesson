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
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/manite/test.php

echo '<br>';
//パスワード（暗号化）
//第一引数に実際のパスワード、第二引数にパウワードの暗号化のタイプ
echo(password_hash('password123',PASSWORD_BCRYPT));
?>