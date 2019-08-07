<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$option = $_REQUEST['option'];
if ($option == "add"){
	echo $num1 + $num2;
}
elseif ($option == "subtract"){
	echo $num1 - $num2;
}
elseif ($option == "multiply"){
	echo ($num1 * $num2);
}
elseif ($option == "divide"){
	echo $num1 / $num2;
}
elseif ($option == "modulus"){
	echo $num1 % $num2;
}

?>

<form action="calc.html">
   <input type="submit" value="back to form">
</form>