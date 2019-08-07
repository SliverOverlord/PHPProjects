<html>

<head>

<title>Used Cars Inventory</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<h1>Used Cars Inventory</h1>
<p>By Joshua DeNio </p>
<h2>Project Number 22</h2>
<?php

$dbname = "deniojo_cars"; // replace with your database name

$username = "deniojo";  // replace with your username

$password = "Turtle1366"; 
extract($_POST);


$make = $_POST[make];
$model = $_POST[model];
$year = $_POST[year];
$color = $_POST[color];
$engine = $_POST[engine];

$make2 = $_POST[make2];
$model2 = $_POST[model2];
$year2 = $_POST[year2];
$color2 = $_POST[color2];
$engine2 = $_POST[engine2];


echo <<< HERE

   <form method="POST"> 

   <h2>View Tables: 

         <input type="submit" name="button" value="cars">
		 

        <BR>
		<hr>
		<h2>Add A Car</h2>
		<h3>Make <input type="text" name="make" hint="Make"> Model <input type="text" name="model" hint="Model"></h3>
		<h3>Date Of Manufacture (YYYY-MM-DD) <input type="text" name="year" hint="YY-MM-DD"></h3>
		<h3>Color <input type ="text" name="color" hint="Color"></h3>
		<h3>Engine Type <input type="text" name="engine" hint="engine"></h3>
		<BR>
		<input type="submit" name="button" value="Add Car">
		<hr>
		<BR>
		
		<BR>
		<h3>Make <input type="text" name="make2" hint="Make"> Model <input type="text" name="model2" hint="Model"></h3>
		<h3>Date Of Manufacture (YYYY-MM-DD) <input type="text" name="year2" hint="YY-MM-DD"></h3>
		<h3>Color <input type="text" name="color2" hint="Color"></h3>
		<h3>Engine Type <input type="text" name="engine2" hint="engine"></h3>
		<BR>
		<BR>
		
		<input type="submit" name="button" value="Remove Car">
		
		

   </h2>

   </form>

   

HERE;

if ($button == "Add Car"){
	$query = "INSERT INTO cars(make,model,year,color,engine) VALUES (";

    $query = $query . "'$make','$model','$year','$color','$engine')";
	
	$conn = mysqli_connect("localhost",$username,$password,$dbname);
	$result = mysqli_query($conn,$query);
	
}

if ($button == "Remove Car"){
	$query = "delete from cars where make = '$make2' and model = '$model2' and year = '$year2' and color = '$color2' and engine = '$engine2'";
	$conn = mysqli_connect("localhost",$username,$password,$dbname);
	$result = mysqli_query($conn,$query);

}

if ($button == "cars")

{

   echo <<< HERE

      <form method="POST"> 

      <input type="submit" name="button" value="clear">

      </form>

HERE;

   $table = $button;

   $conn = mysqli_connect("localhost",$username,$password,$dbname);

   $sql = "select * from $table";

   $result = mysqli_query($conn,$sql);

   

   // output the field names

   echo "<h3>Field Names in the $table table</h3>";

   while ($field = mysqli_fetch_field($result))

   {

      echo "$field->name<br>\n";

   }

   

   

   // output the records

   echo "<h3>Records in the $table table</h3>";

   echo "------------------<br>";

   while ($row = mysqli_fetch_assoc($result))

   {

      foreach ($row as $col=>$val)

      {

         echo "$col - $val<br>\n";

      }

      echo "------------------<br>";

   }

}

?>



 <ul>

<li><a href="http://puff.mnstate.edu/~rm8834yy/private/index.html">Home</a></li>

</ul>

</body>

</html>