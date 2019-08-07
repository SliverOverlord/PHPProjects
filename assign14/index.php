<?php
//extract($_REQUEST);
extract($_GET);

$c = $_GET['c'];
$num = $_GET['num'];

echo " ";

for ($i = 0; $i < $num; $i++){
	echo $c;
}

?>
