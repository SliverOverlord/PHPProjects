<?php
$num = $_REQUEST['num'];
$fTemp = 0;
$kTemp = 0;
$button=$_REQUEST['button'];

if ($button=="Convert to F"){
	
   $fTemp = ($num*(9/5))-459.67;
   echo $fTemp;
}
   
elseif ($button=="Convert to K"){
   $kTemp = ($num + 459.67);
   $kTemp = (5/9)*$kTemp;
   echo $kTemp;
 }
?>

<form action="temp.html">
   <input type="submit" value="back to form">
</form>