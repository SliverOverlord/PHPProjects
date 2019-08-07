<html>
<body>
<form>
<?php
// initialize the variables named "result", "new", and "history"
$result = 0;
$new = 0;
$history = "";
	
// use extract to populate the namespace with the names of the form elements that were submitted to it
extract($_REQUEST);
// add "new" and "result" together and put the result in "result"
$result = $new + $result;
?>
<textarea name="history" rows="20">
<?php 
// output the contents of the variable "history"
echo $history;
?>


<?php
// output the contents of the variable "result"
echo $result;
?>

</textarea>
<input type="text" name="new">
<input type="hidden" name="result" value="<?php
// output the contents of the variable "result"
echo $result;
?>">
<input type="submit">
</form>
</body>
</html>

