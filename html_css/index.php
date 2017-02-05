<?php
class Menu {
  public $name;
  
  public fucntion __construct($name)
  {
  	$this->name = $name;
  }


  public function hello()		//メソッドの定義
  {
    echo '私はMenuクラスのインスタンスです';
  }
  
}

$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');
// $curryに対してhelloメソッドを呼び出してください
$curry->hello();	//メソッドの呼び出し


echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta->hello();	//メソッドの呼び出し

?>