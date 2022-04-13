
<?php

// switch
// if文 の方がいい 見やすい

$date = 1;

// == switch
// === 型も等しい

switch($date){
  case $date === 1:
    echo'1です';
    break;
  case 2:
    echo'2です';
    break;
  case 3:
    echo'3です';
    break;
    default:
    echo '1-3ではありません';
}

if($date === 1){
  echo '1';
}

if($date === 2){
  echo '2';
}

if($date === 3){
  echo '3';
}
?>