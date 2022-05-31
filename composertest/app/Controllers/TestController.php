<?php

namespace App\Controllers;

//作成したフォルダを読み込むためにriqwireではなく、useという構文を使う
//AppのModelsの中のTestmodelクラスを持ってきます
use  App\Models\TestModel;

class TestController
{
  public function run(){
    $model = new TestModel;
    echo $model->getHello();
  }
}
?>