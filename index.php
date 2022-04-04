
<?php

//配列・・数字（順番固定）と値がセット
//$array[1]


//連想配列・・キーと値がセット
//キー => 値
//key => value
//$array ["key"]

//キーと値の部分は文字ならシングルクォーテーション、数字は何もいない
$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

//連想配列はキーの値にさらに配列を作って、その中にキーと値を作れる
$array_member_2 = [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ],
    '香川' => [
      'height' => 165,
      'hobby' => 'サッカー'
    ]
  ];

  echo $array_member_2['香川']['height'];

  echo '<pre>';
  var_dump($array_member_2);
  echo '</pre>';

  $array_member_3 = [
    '1kumi' => [
      '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
      ],
      '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
      ]
    ],
    '2kumi' => [
      '長友' => [
        'height' => 160,
        'hobby' => 'サッカー'
      ],
      '乾' => [
        'height' => 168,
        'hobby' => 'サッカー'
      ]
    ]
  ];

  echo $array_member_3['2kumi']['長友']['height'];

   echo '<pre>';
  var_dump($array_member_3);
  echo '</pre>';

?>