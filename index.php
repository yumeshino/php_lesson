
<?php
//条件分岐

//if(elseはできるだけ使わない)
//foreach(配列の抽出)

//if (条件) {
//条件が真なら実行
// } 

// if(条件) {
//   条件が真なら実行
// } else {
//   条件が偽なら実行
// }



$height = 90;

var_dump($height);

if ($height === 91){//条件は数字
  echo '身長は'.$height.'cmです';
}else {
  echo '身長は'.$height.'cmではありません';
}

$signal = 'red';

if ($signal === 'red'){
  echo'とまれ';
}else if ($signal === 'yellow'){
  echo'一旦停止';
}else {
  echo'進む';
}


$speed = 80;

if ($signal === 'blue'){
  if($speed >= 90){
    echo'スピード違反';//ネスト構文
  }
}


//== 一致
//=== 型も一致

?>