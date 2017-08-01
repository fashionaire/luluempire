<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cardatabase";

//start a new connection
$connection = new mysqli ($servername, $username, $password, $database);

//test connection
if($connection-> connect_error) {die ("connection failed". $connection-> connect_error);}
	
	#mysqli_select_db("name the database) place it her

echo "sucessfully connected to your DB <br>";

#forupdate

$sql="UPDATE Customers SET lastname = 'ijay' WHERE firstname = 'nene'" ;

if (mysqli_query ($connection, $sql)) {
	echo "sucessfully updated";
	}
	else  {
		echo "Not succesfully updated"; mysqli_error($connection);
	}
	mysqli_close ($connection)

	?>