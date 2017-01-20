<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
//変数$menusに入っている全ての連想配列のうち、priceの値が一番高いもののnameとpriceの値を、
//「○○が最高価格で××円です」出力してください。

$sum = 0;
$maxPrice = 0;
$maxPriceMenuName = '';

foreach($menus as $menu){
	$name = $menu["name"];
	$price = $menu["price"];

	echo $name . 'は' . $price . '円です<br>';

	$sum += $price;

	if ($maxPrice < $price){
		$maxPrice = $price;
		$maxPriceMenuName = $name;
	}


}

echo '合計金額は' . $sum . '円です<br>';
echo '「' . $maxPriceMenuName . 'が最高価格で' . $maxPrice . '円です」';




?>