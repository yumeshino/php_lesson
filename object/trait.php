<?php

//頭にtrait
//classが単一継承なのに対して複数の継承が可能
trait ProductTrait{
  public function getProduct(){
    echo 'プロダクト';
  }
}

trait NewsTrait{
  public function getNews(){
    echo 'ニュース';
  }
}


class Product{

  //useというキーワードでtraitの機能を持ってくる
  use ProductTrait;
  use NewsTrait;

  public function getInformation(){
    echo 'クラスです';
  }

//オーバーライドも可能
//その場合classの方のメソッドが優先される
  // public function getNews(){
  //   echo 'クラスのニュースです';
  // }
}

//instance化
$product = new Product();

$product->getInformation();
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';

?>