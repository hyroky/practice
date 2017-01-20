<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
//配列$pricesで与えられた価格の合計金額を算出し
//「合計金額は○○円です」と出力しましょう。
$sum = array_sum($prices);
echo '「合計金額は' . $sum . '円です」';



?>