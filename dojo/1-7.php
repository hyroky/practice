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
$sum = array_sum($prices);
echo '「合計金額は' . $sum . '円です」';

//合計金額に加えて、最も高い価格も表示できるようにしましょう。
//配列$pricesで与えられた価格の最高価格を算出し、
//「最高価格は○○円です」と出力しましょう
$max = max($prices);
echo '「最高価格は' . $max . '円です」';

?>