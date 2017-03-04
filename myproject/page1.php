<?php

$list = [];

$handle = fopen('text.txt', 'r+');

while (($buffer = fgets($handle, 4096)) !== false) {	
	$row = explode(";", $buffer);
	$list[] = $row; //echo $buffer. "<br>";

}

var_dump($list);

fclose($handle);

?>