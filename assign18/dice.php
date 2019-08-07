<html>
<head>
<title>Zambales Dice Game</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form>
<?php
extract($_REQUEST);
$playerName = $_REQUEST['player'];
$dice1 = 0;
$dice2 = 0;
$roll;
$rollCount = $_REQUEST['rollNum'];
$button = $_REQUEST['button'];

if ($button == 'Start'){
	startGame($playerName);
	echo "<input type='hidden' name='player' value='$playerName'>";
}
else{
	if ($button == "Roll Die" && $rollCount <5){
		$dice1 = shakeDice();
		$dice2 = shakeDice();
		displayDice($dice1,$dice2);
		if ($dice1 == $dice2){
			echo '<br>';
			echo $playerName;
			echo "<br>";
			echo "You have a matching set of "."$dice1"."s";
			echo "<br>";
			echo "Congradulations you have won the game!";
			echo "<br>";
			echo "<input type='submit' name='button' value='Play Again'>";
			echo "<input type='hidden' name='player' value='$playerName'>";
		}
		else{
			$num=$rollCount+1;
			echo '<br>';
			echo $playerName;
			echo '<br>';
			echo "You didn't roll a matching set. Better luck next time.";
			echo "<br>";
			echo "<input type='hidden' name='rollNum' value='$num'>";
			echo "<input type='submit' name='button' value='Roll Die'>";
			echo "<input type='hidden' name='player' value='$playerName'>";
		
		}
	}
	elseif($button=='Play Again'){
		startGame($playerName);
		echo "<input type='hidden' name='player' value='$playerName'>";
	}
	else{
		
		$num2=0;
		echo '<br>';
		echo $playerName;
		echo '<br>';
		echo "You have palayed 5 rolls and failed to match a set. You have lost the game. :( ";
		echo "<br>";
		echo "Would you like to play again?";
		echo "<br>";
		echo "<input type='hidden' name=rollNum' value='$num2'>";
		echo "<input type='submit' name='button' value='Play Again'>";
		echo "<input type='hidden' name='player' value='$playerName'>";
	}
}
function startGame($playerName){
	echo '<br>';
	echo $playerName;
	echo '<br>';
	echo "Roll the dice; if you can match a set in five or less turns you win the game!";
	echo "<br>";
	echo "<input type='hidden' name='rollNum' value='$rollCount'>";
	echo "<input type='submit' name='button' value='Roll Die'>";
	echo "<input type='hidden' name='player' value='$playerName'>";
	
}
function displayDice($dice1,$dice2){
	
	echo "Dice Rolled";
	echo '<br>';
	echo "<img src='die$dice1.jpg' width='50'>";;
	echo '		';
	echo "<img src='die$dice2.jpg' width='50'>";
	echo '<br>';
	echo '<br>';
	
}
function shakeDice(){
	$roll = rand(1,6);
	return $roll;
}
echo "<HR>";
highlight_file("index.php");

?>
</form>
<form action="dice.html">
   <input type="submit" value="back to form">
</form>

</body>
</html>