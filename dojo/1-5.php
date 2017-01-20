<?php 
//1から100までの数字を順番に表示してください。
//ただし、
//・その数が3で割り切れるなら、「Fizz」
//・その数が5で割り切れるなら、「Buzz」
//・その数が3でも5でも割り切れるなら、「FizzBuzz」をその数字の代わりに表示してください。

//※出力の度に改行してください。
//改行するためには
//echo '<br>';
//としてください


for($i = 1; $i <= 100; $i++){
	if (($i % 3) == 0 && ($i % 5) == 0){
		echo 'FizzBuzz';
		echo '<br>';
	} elseif ($i % 3 == 0){
		echo 'Fizz';
		echo '<br>';
	} elseif ($i % 5 == 0){
		echo 'Buzz';
		echo '<br>';
	} else {
		echo $i;
		echo '<br>';
	}
}


?>