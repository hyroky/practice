<?php
class Menu {
  public $name;
  
  // helloメソッドを定義してください
  public function hello()		//メソッドの定義
  {
    echo '私はMenuクラスのインスタンスです';
  }
  
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
// $curryに対してhelloメソッドを呼び出してください
$curry->hello();	//メソッドの呼び出し


echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta->hello();	//メソッドの呼び出し

?>