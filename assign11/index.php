<html>
<body>
<form>
<?php
// assign $a a random number between 2 and 10
$a = rand(2,10);
// assign $b a random number between 2 and 10
$b = rand(2,10);
// extract $_REQUEST
extract($_REQUEST);
$product = $_REQUEST['product'];
// test to see if $product is equal to $a times $b
$c = $a * $b;
if ($product == $c)
{
	echo "Good job!<br>";

// output a hidden input field with name a and with a new random value
$a = rand(2,10);
echo "<input type='hidden' name='a' value='$a'/>";
// output a hidden input field with name b and with a new random value
$b = rand(2,10);
echo "<input type='hidden' name='b' value='$b'/>";
?>
<input type="submit">
<?php
} else {
	// if this was a new page load, $product will be empty, so we don't output anything
	// otherwise, if product has a value, and we're here, then it is an incorrect value, so we output a message that the user should try again
	if ($product==null){
		echo "";
	}
	else{
		echo "Invalid entry try again";
	}


// output a hidden input field with name a and with the value of the $a variable
$a = rand(2,10);
echo "<input type='hidden' name='a' value='$a'/>";
// output a hidden input field with name b and with the value of the $b variable
$b = rand(2,10);
echo "<input type='hidden' name='b' value='$b'/>";
?>
	Product of <?php echo $a; ?> and <?php echo $b; ?>:
<input type="text" name="product">
<br>
<input type="submit">
<?php
};
?>
</form>
</body>
</html>

