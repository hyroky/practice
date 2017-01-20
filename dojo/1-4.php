<?php
$money = 2640;
$price = 2400;
$taxRate = 0.1;
echo '変数$moneyの値: '.$money;
echo '<br>';
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください

	//①$priceと$taxRateから税込価格を算出しましょう。
	$tax = $price * $taxRate; //税
	$fix_price = $price + $tax; //税込価格
	echo '税込価格は' . $fix_price . '円です';
	echo '<br>所持金は' . $money . '円です。<br>';

	//②$moneyの値と税込価格を比較して、
	// 以下のように出力を分けてください。
	// ・税込価格より大きい場合は
	// 　「商品を買うことができます」
	// ・税込価格と同じ場合は
	// 　「商品を買うことができますが、所持金がなくなります」
	// ・税込価格より小さい場合は
	// 　「商品を買うことができません」
	// （※税込価格の算出方法は1つ前の演習を参考にしてください）

	


?>