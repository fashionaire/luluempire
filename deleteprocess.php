<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cardatabase";
#start a new operation

$connection=new mysqli ($servername, $username, $password, $database);
#test conection 

if ($connection ->connect_error) {
die("connection failed". $connection ->connnect_error );
 }

echo "sucessfully connected to your DB <br>";

//selecting Database from server
if (isset ($_POST ['submit']));

        $firstname= $_POST ['firstname'];

        mysqli_query ($connection, "delete from customers where firstname= '$firstname' ");

if (mysqli_affected_rows ($connection)>0)
		{
			echo "<p> Recorded Deleted Successfully </p>";
		}
        else {echo "<p> NOT Added </p>";
        echo mysql_error($connection);
      
         }
		 header("location://Localhost/libraryform.php");
		?>
		