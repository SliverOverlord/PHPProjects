<html>
<body>
<form>
<?php
extract($_REQUEST);
$nameStr = $_REQUEST['nameStr'];

$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$num = $_REQUEST['num'];
$c = div($a,$b);
$scoreStr = $_REQUEST['scoreStr'];
$count = $_REQUEST['count'];

echo $nameStr;
echo "<br>";
//setName();
echo "<input type='hidden' name='nameStr' value='$nameStr'/>";
//setStage();
if ($nameStr == null){
	echo "<input type='text' name='namelbl' value='Name:'>";
	echo "<input type='text' name='nameStr'>";
 
	echo "<br/>";
	echo "<br/>";
   
	echo "<input type='submit' name='button' value='Submit'>";
};

if ($count == null){
	$count = 1;
};

if ($button == 'Clear'){
	$scoreStr = "";
}

if ($num == $c){
	echo "Correct<br><br>";
	
	$scoreStr = $scoreStr.addString($a,$b,$c,$num,$count);
	echo "<input type='hidden' name='scoreStr' value='$scoreStr'>";
	$count = $count++;
	echo "<input type='hidden' name='count' value='$count'>";
	
	$a = random();
	$b = random();
	echo "<input type='hidden' name='a' value='$a'/>";
	echo "<input type='hidden' name='b' value='$b'/>";
	
	echo "<h1> The result of " . $a . " divided by ". $b ."? </h1>";
	echo"<input type='text' name='num'>";
	echo "<br>";
	echo "<input type='submit' value='Submit'>";
	
	echo "<br>";
	echo "<br>";
	echo "<input type='submit'value='Clear'>";
	
	echo "<br>";
	echo "<br>";
	echo $scoreStr;
	}
else {
	
	if ($num==null){
		echo "";
		//$a = random();
		//$b = random();
		//echo "<input type='hidden' name='a' value='$a'/>";
		//echo "<input type='hidden' name='b' value='$b'/>";
	}
	else{
		echo "Incorrect";

		echo "<input type='hidden' name='a' value='$a'/>";
		echo "<input type='hidden' name='b' value='$b'/>";
		
		echo "<input type='submit' name='button' value='Try Again'>";
		$scoreStr = $scoreStr.addString($a,$b,$c,$num,$count);
		echo "<input type='hidden' name='scoreStr' value='$scoreStr'>";
		$count = $count++;
		echo "<input type='hidden' name='count' value='$count'>";
		
		echo "<br>";
		echo "<input type='submit'value='Clear'>";
		echo "<br>";
		echo $scoreStr;
		if ($button=="Try Again"){
			echo "<input type='hidden' name='a' value='$a'/>";
			echo "<input type='hidden' name='b' value='$b'/>";
			echo "<h1> The result of " . $a . " divided by ". $b ."? </h1>";
		
			echo"<input type='text' name='num'>";
			echo "<br>";
			echo "<input type='submit'value='Submit'>";
	}
	};
	
	if ($button=="Try Again"){
		echo "<input type='hidden' name='a' value='$a'/>";
		echo "<input type='hidden' name='b' value='$b'/>";
		echo "<h1> The result of " . $a . " divided by ". $b ."? </h1>";
		
		echo"<input type='text' name='num'>";
		echo "<br>";
		echo "<input type='submit'value='Submit'>";
	}
	else {
		$a = random();
		$b = random();
		echo "<input type='hidden' name='a' value='$a'/>";
		echo "<input type='hidden' name='b' value='$b'/>";
		echo "<h1> The result of " . $a . " divided by ". $b ."? </h1>";
		echo"<input type='text' name='num'>";
		echo "<br>";
		echo "<input type='submit'value='Submit'>";
	};
};
function addString($a,$b,$c,$num,$count){
	$newStr = $count."<br>".$a . " divided by ".$b." = ".$c." you answered ".$num."<br>";
	return $newStr;
}

function div($a,$b) {
    $c = round($a / $b,1);
    return $c;
}

function random() {
    $c = rand(1,9);
    return $c;
}
echo "<HR>";
highlight_file("index.php");
?>
</form>
</body>
</html>

