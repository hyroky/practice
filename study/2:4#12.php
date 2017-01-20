<?php
class Menu {
  // $nameというプロパティを定義してください
  public $name;
  public function hello(){
  	echo '私はMenuクラスのインスタンスです';
  }
}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入してください
$curry->name = 'CURRY';

// $pastaのnameプロパティに'PASTA'を代入してください
$pasta->name = 'PASTA';

// $curryのnameプロパティをechoしてください
$curry->hello();

echo '<br>';
// $pastaのnameプロパティをechoしてください
$pasta->hello();

?>