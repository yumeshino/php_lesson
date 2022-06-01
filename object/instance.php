モダンphp
・PSR-1,2,4(PHPコーディング規約)
・namespace(名前空間)
・autoload(自動クラス読み込み)
・composer(PHPライブラリ管理+オートロード)

<?php

//大文字スタートが決まり
class Product {

  //アクセス修飾子,private(外からアクセス✖️),protected(自分・継承したクラス),public(公開)

  //変数
  private $product = [];

  //関数

  //function __constructの形は
  //初回に起動する関数として使える
  function __construct($product){
    
    $this->product = $product;
  }

  //アクセス修飾子(public)を頭につけて外からでもアクセス可能に
  public function getProduct(){
    echo $this->product;
  }

  public function addProduct($item){
    //.=で追加する
    $this->product .= $item;
  }

  public static function getStaticProduct($str){
    echo $str;
  }
  
  }


  $instance = new Product('テスト');

  //インスタンス変数から->で繋ぐことで関数を呼び出すことができる
  $instance->getProduct();
  echo '<br>';

  $instance->addProduct('追加分');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  //静的(static) クラス名::関数名
  Product::getStaticProduct('静的');
  echo '<br>';

  


?>
