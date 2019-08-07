<?php
$a = $_GET['a'];
$b = $_GET['b'];
$option = $_GET['op'];

if ($option == "add"){
	$num = sum($a,$b);
	echo " ";
	echo $num;
}
elseif ($option == "mult"){
	$num = mult($a,$b);
	echo " ";
	echo  $num;
}
elseif ($option == "div"){
	$num = div($a,$b);
	echo " ";
	echo $num;
}
elseif ($option == "comp"){
	$num = comp($a,$b);
	echo " ";
	echo $num;
}
elseif ($option == "rand"){
	$num = random($a,$b);
	echo " ";
	echo $num;
}



function sum($a,$b) {
    $c = $a + $b;
    return $c;
}
function mult($a,$b) {
    $c = $a * $b;
    return $c;
}
function div($a,$b) {
    $c = $a / $b;
    return $c;
}
function comp($a,$b) {
    if ( $a == $b){
    return "yes";
	}
	else {
		return "no";
	}
}
function random($a, $b) {
	$newA = $a;
	$newB = $b;
	if ($a > $b){
		$newA = $b;
		$newB = $a;
	}
    $c = rand($newA,$newB);
    return $c;
}


?>
