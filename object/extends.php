<?php

// extendsを使うことでもう一つ親クラスを作ってそこから機能を継承する

//親クラス・基底クラス・スーパークラス
class BaseProduct{
  //変数 関数
  public function echoProduct(){
    echo '親クラスです';
  }

  //オーバーライド(上書き)
  //親クラスの関数を作っておいて同じ名前で子クラスの方にも関数を作っておくと子クラスの方で上書きされる
  public function getProduct(){
    echo '親の関数です';
  }
}

//子クラス・派生クラス・サブクラス
//継承するには extends 親クラス名
class Product extends BaseProduct {

  //アクセス修飾子,private(外からアクセス✖️),protected(自分・継承したクラス),public(公開)

  //変数
  private $product = [];

  //関数


  //初回
  function __construct($product){
    
    $this->product = $product;
  }

  public function getProduct(){
    echo $this->product;
    //名前が被っていて親クラスの関数を使いたい場合
    //parent::というキーワードもある
  }

  public function addProduct($item){
    $this->product .= $item;
  }

  public static function getStaticProduct($str){
    echo $str;
  }
  
  }

//インスタンス化
  $instance = new Product('テスト');

  var_dump($instance);

  $instance->getProduct();
  echo '<br>';

  //親クラスのメソッドを引き継いでいる
  $instance->echoProduct();
  echo '<br>';

  $instance->addProduct('追加分');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  //静的(static) クラス名::関数名
  Product::getStaticProduct('静的');
  echo '<br>';


?>

