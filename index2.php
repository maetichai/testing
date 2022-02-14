<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$colors = array("red", "blue"); 

foreach ($colors as $value) {

		// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM MyGuests WHERE firstname = '$value'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {  
	   while($row = $result->fetch_assoc()) {
	   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

	   if($row["firstname"] == 'red')
	   {
	   		echo "yes";

	   		$favcolor = $row["firstname"];

					switch ($favcolor) {
					  case "red":
					    echo "Your favorite color is red!";
					    	$x = "Yes";
					    	$N = "No";
					    	$U = "No";
					    	if($x == "Yes")
						    {
						    	echo "<br>Your are good body?";
						    	if($N == "No")
							    {
							    	echo "<br>Your want to Check again?";
							    	if($U == "No")
								    {
								    	include "awser.php"; 
								    }
							    }
						    }
					    break;
					  case "blue":
					    echo "Your favorite color is blue!";
					    break;
					  case "green":
					    echo "Your favorite color is green!";
					    break;
					  default:
					    echo "Your favorite color is neither red, blue, nor green!";
					}
	   }
	   //echo "meet";
	 
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();

  // echo "$value <br>";


}
 



// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT * FROM MyGuests WHERE firstname = 'red'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();