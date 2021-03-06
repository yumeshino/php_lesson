<?php

//抽象クラス 頭にabstractをつける //設定するメソッド（関数）を強制
//
abstract class ProductAbstract{
  //変数 関数
  public function echoProduct(){
    echo '親クラスです';
  }

  //頭にabstractをつけて抽象メソッドの形に
  //関数の中身は書けない
  //抽象クラスで設定しているメソッドは必ず子クラスでも書く必要がある
  //クラスの特徴も持っていてonterfaceと普通のクラスの中間の位置付け
  abstract public function getProduct();
}


//抽象クラスに対してinstance化できるのを
//具象クラス、親クラス・基底クラス・スーパークラス
class BaseProduct{
  //変数 関数
  public function echoProduct(){
    echo '親クラスです';
  }

  //オーバーライド(上書き)
  public function getProduct(){
    echo '親の関数です';
  }
}



//子クラス・派生クラス・サブクラス
class Product extends ProductAbstract {

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

  $instance->getProduct();
  echo '<br>';

  $instance->echoProduct();


  $instance->addProduct('追加分');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  //静的(static) クラス名::関数名
  Product::getStaticProduct('静的');
  echo '<br>';


?>

