<?php
$input = $_REQUEST['input'];
$num = $_REQUEST['num'];
$numOut = 0;
$button = $_REQUEST['button'];

if ($button == "Convert to Feet"){
	if ($input == "Feet"){
		echo $num;
	}
	elseif ($input == "Miles"){
		$numOut = $num*5280;
		echo $numOut;
	}
	elseif ($input == "Inches"){
		$numOut = $num*0.0833333;
		echo $numOut;
	}
	elseif ($input == "Centimeters"){
		$numOut = $num*0.0328084;
		echo $numOut;
	}
	elseif ($input == "Meters"){
		$numOut = $num*3.28084;
		echo $numOut;
	}
	elseif ($input == "Kilometers"){
		$numOut = $num*3280.84;
		echo $numOut;
	}
	
}
elseif ($button == "Convert to Inches"){
	if ($input == "Inches"){
		echo $num;
	}
	elseif ($input == "Miles"){
		$numOut = $num*63360;
        echo $numOut;

	}
	elseif ($input == "Feet"){
		$numOut = $num*12;
		echo $numOut;

	}
	elseif ($input == "Centimeters"){
		$numOut = $num*0.393701;
		echo $numOut;

	}
	elseif ($input == "Meters"){
		$numOut = $num*39.3701;
		echo $numOut;

	}
	elseif ($input == "Kilometers"){
		$numOut = $num*39370.1;
		echo $numOut;

	}
}
elseif ($button == "Convert to Miles"){
	if ($input == "Miles"){
		echo $num;
	}
	elseif ($input == "Feet"){
		$numOut = $num*0.000189394;
		echo $numOut;

	}
	elseif ($input == "Inches"){
		$numOut = $num*0.000015783;
		echo $numOut;

	}
	elseif ($input == "Centimeters"){
		$numOut = $num*0.0000062137;
		echo $numOut;

	}
	elseif ($input == "Meters"){
		$numOut = $num*0.0006221371;
		echo $numOut;

	}
	elseif ($input == "Kilometers"){
		$numOut = $num*0.621371;
		echo $numOut;

	}
}
elseif ($button == "Convert to Centimeters"){
	if ($input == "Centimeters"){
		echo $num;
	}
	elseif ($input == "Miles"){
		$numOut = $num*160934;
		echo $numOut;

	}
	elseif ($input == "Inches"){
		$numOut = $num*2.54;
		echo $numOut;

	}
	elseif ($input == "Feet"){
		$numOut = $num*30.48;
		echo $numOut;

	}
	elseif ($input == "Meters"){
		$numOut = $num*100;
		echo $numOut;

	}
	elseif ($input == "Kilometers"){
		$numOut = $num*100000;
		echo $numOut;

	}
}
elseif ($button == "Convert to Meters"){
	if ($input == "Meters"){
		echo $num;
	}
	elseif ($input == "Miles"){
		$numOut = $num*1609.34;
		echo $numOut;

	}
	elseif ($input == "Inches"){
		$numOut = $num*0.0254;
		echo $numOut;

	}
	elseif ($input == "Centimeters"){
		$numOut = $num*0.01;
		echo $numOut;

	}
	elseif ($input == "Feet"){
		$numOut = $num*0.3048;
		echo $numOut;

	}
	elseif ($input == "Kilometers"){
		$numOut = $num*1000;
		echo $numOut;

	}
}
elseif ($button == "Convert to Kilometers"){
	if ($input == "Kilometers"){
		echo $num;
	}
	elseif ($input == "Miles"){
		$numOut = $num*1.60934;
		echo $numOut;

	}
	elseif ($input == "Inches"){
		$numOut = $num*0.0000254;
		echo $numOut;

	}
	elseif ($input == "Centimeters"){
		$numOut = $num*0.00001;
		echo $numOut;

	}
	elseif ($input == "Meters"){
		$numOut = $num*0.001;
		echo $numOut;

	}
	elseif ($input == "Feet"){
		$numOut = $num*0.0003048;
		echo $numOut;

	}
}



?>

<form action="length.html">
   <input type="submit" value="back to form">
</form>