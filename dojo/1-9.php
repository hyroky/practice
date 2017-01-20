<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
foreach($menus as $menus){
	echo $menus["name"] . 'は' . $menus["price"] . '円です<br>';
}


?>