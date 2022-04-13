
<?php

// foreach 複数の値を展開したり表示したりする

$members = [
  'name' => '本田',
  'height' => '170',
  'hibby' => 'サッカー'
];

//バリューのみ表示
//右側の変数は何でもいいが視認性の観点から元々の名前を複数形にして右側は単体形にするのがオーソドックス
foreach($members as $member){
  echo $member;
}

echo'<br>';

//キーとバリューそれぞれ表示
foreach($members as $key => $value){
  echo $key. 'は'. $value. 'です';
}

echo'<br>';



// 多段階の配列を展開
$members_2 = [
  '本田' => [
    'height' => '170',
    'hibby' => 'サッカー'
  ],
  '香川' => [
    'height' => '165',
    'hibby' => 'サッカー'
  ]
];

foreach($members_2 as $member_1){
  foreach($member_1 as $member => $value)
  echo $member. 'は'. $value. 'です';
}
?>