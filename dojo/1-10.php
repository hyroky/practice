<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
// 変数$menusに入っている全ての連想配列のpriceの値の合計を算出して、
//「合計金額は○○円です」と出力しましょう。

$sum = 0;

foreach($menus as $menus){
	echo $menus["name"] . 'は' . $menus["price"] . '円です<br>';
	$sum += $menus["price"];
}

echo '合計金額は' . $sum . '円です';




?>