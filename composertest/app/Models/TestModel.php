<?php

//名前空間
//フォルダの関係性と同じにする
namespace App\Models;

//classの名前はファイルの名前にする
//１ファイル１クラス
class TestModel
{
  private $text = 'hello world';

  public function getHello(){
    return $this->text;
  }
}
?>