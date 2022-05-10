phpからmysqlデータベースにアクセスするためのAPIはmysqlかPDO_musql

DBの種類と特徴
->膨大なデータを管理・・数百万、数千万でも可能
DBの種類は2種類
RDB リレーショナルデータベース（mysqlはこっち）
->複数のテーブルを紐付けることができる
  紐付けすることでデータの重複を防ぐ
NoSQL
->高速処理が可能


DB操作の基本 CRUD
Create・・・新規作成 insert
Read・・・・表示 slect
Update・・・更新 update（上書き） ->履歴を残すか、完全に上書きするか
Delete・・・削除 delete ->完全に消すか、非表示にするか

db操作の基本 Select
Select 表示させたい項目
From table名
Whwre 検索条件
->SELECT*FROM`contacts
->SELECT`your_nama`,`email`FROM`contacts`WHERE`your_name` = あああ

データ量が膨大になるなら
パーティション（分割）、インデックス（牽引）
レプリケーション（ミラーリング）も要検討



PDO
->データベースを繋ぐ機能に特化した変数や定数をまとめているもの

クラスの考え方（ひとまとめ）
クラス(class)
  変数/定数->プロパティ
  関数     ->メソッド

関連する機能をひとまとめに（責務の分離）