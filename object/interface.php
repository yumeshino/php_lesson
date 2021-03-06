<?php

//インターフェイス 頭にinterfaceとつける
//メソッドの内容の部分しか書けない
//publicの関数で中身は書いてはいけない
//mplementsで複数適用可能

interface ProductInterface{
  //変数 関数
  // public function echoProduct(){
  //   echo '親クラスです';
  // }

  public function getProduct();
  
}

//インターフェイス
interface NewsInterface{

  public function getNews();
  
}

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
//interfaceを使うには子クラスにimplementsというキーワードを使う
//複数の適用可能
class Product implements ProductInterface,NewsInterface {

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

  public function getNews(){
    echo 'ニュースです';
  }

  public static function getStaticProduct($str){
    echo $str;
  }
  
  }

//インスタンス化
  $instance = new Product('テスト');

  $instance->getProduct();
  echo '<br>';

  // //親クラスのメソッド
  // $instance->echoProduct();
  // echo'<br>';


  $instance->addProduct('追加分');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  $instance->getNews();
  echo '<br>';


  //静的(static) クラス名::関数名
  Product::getStaticProduct('静的');
  echo '<br>';


?>

