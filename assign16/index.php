<?php
extract($_REQUEST);
$name = $_REQUEST['name'];
$option = $_REQUEST['option'];

//bool checkdate ( int $month , int $day , int $year )

//string date ( string $format [, int $timestamp = time() ] )
if ($button == 'submit'){
	
	if ($option == "short"){
		echo "short";
	}
	elseif ($option == "long"){
		echo "long";
	}
	elseif ($option == "economy"){
		echo "economy";
	}

}
else{
	displayform();
}

function calcShort(){

}
function calcLong(){

}
function calcEconomy(){

}

function displayform()
{
   echo "<form>";
   		form(array("year"=>array(2010,2020),"month"=>array("January","February","March","April","May","June","July","August","September","October","November","December"),"day"=>31,"hour"=>24,"minute"=>60));
			form2(array("year"=>array(2010,2020),"month"=>array("January","February","March","April","May","June","July","August","September","October","November","December"),"day"=>31,"hour"=>24,"minute"=>60));
	<br/>
   	<input type="radio" name="option" value="short">Short Term<br/>
   	<input type="radio" name="option" value="long">Long Term<br/>
   	<input type="radio" name="option" value="economy">Economy<br/>
	<br/>
	echo "<input type='submit' name='button' value='Submit'>";
   echo <<< HERE
   <input type="submit" name="button" value="go">
HERE;
   echo "</form>";
}


function back2form()
{
   echo <<< HERE
   <form>
      <input type="submit" name="$button" value="back to form">
   </form>
HERE;
}


function selectArray($name,$theArray) {
	
	echo "<select name=\"$name\">";
	foreach ($theArray as $key => $value){
		echo "<option value=\"$key\">$value</option>";
	};
	echo "</select>";
};

function selectNum($name,$first,$last) {

	echo "<select name=\"$name\">";
	
	for ($i = $first; $i < $last+1; $i++){
		echo "<option>$i</option>";
	};
	echo "</select>";
};

function selectNum2($name,$first,$last) {

	echo "<select name=\"$name\">";
	
	for ($i = $first; $i < $last+1; $i++){
		echo "<option>$i</option>";
	};
	echo "</select>";
};

function form($layout) {
	echo "<form>";
	
	foreach ($layout as $key => $value){
		if (is_array($value)) {
			if ((count($value) == 2)&&(is_numeric($value[0]))&&(is_numeric($value[1]))) {
				selectNum($key,$value[0],$value[1]);
			} else {
				selectArray($key,$value);
			};
		} else {
			selectNum($key,1,$value);
		};
	};
	echo "<input type=\"submit\"></form>";
};

function form2($layout) {
	echo "<form>";
	
	foreach ($layout as $key => $value){
		if (is_array($value)) {
			if ((count($value) == 2)&&(is_numeric($value[0]))&&(is_numeric($value[1]))) {
				selectNum2($key,$value[0],$value[1]);
			} else {
				selectArray($key,$value);
			};
		} else {
			selectNum($key,1,$value);
		};
	};
	echo "<input type=\"submit\"></form>";
};


/*
if (count($_REQUEST)) {
	print_r($_REQUEST);
} else {
	form(array("year"=>array(2010,2020),"month"=>array("January","February","March","April","May","June","July","August","September","October","November","December"),"day"=>31,"hour"=>24,"minute"=>60));
	form(array("year"=>array(2010,2020),"month"=>array("January","February","March","April","May","June","July","August","September","October","November","December"),"day"=>31,"hour"=>24,"minute"=>60));
	<br/>
   	<input type="radio" name="option" value="short">Short Term<br/>
   	<input type="radio" name="option" value="long">Long Term<br/>
   	<input type="radio" name="option" value="economy">Economy<br/>
	<br/>
	echo "<input type='submit' name='button' value='Submit'>";
	
	};
*/

echo "<HR>";
highlight_file("index.php");
?>

