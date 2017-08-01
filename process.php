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
		$lastname= $_POST ['lastname'];
		$gender= $_POST ['gender'];
		$phonenumber= $_POST ['phonenumber'];
	    $email= $_POST ['email'];
		$address= $_POST ['address'];
		//execute the query

		mysqli_query ($connection, "INSERT INTO customers (firstname, lastname, gender, phonenumber, email, address) 
			VALUES ('$firstname', '$lastname', '$gender', '$phonenumber', '$email', '$address') ");
		if (mysqli_affected_rows ($connection)>0)
		{
			echo "<p> Recorded Added Successfully </p>";
		}
        else {echo "<p> NOT Added </p>";
        echo mysql_error($connection);
      }

     //selecting Database from server
		if (isset ($_POST ['submit']));

		$firstname= $_POST ['firstname'];
		$middlename= $_POST ['middlename'];
		$lastname= $_POST ['lastname'];
        $Gender= $_POST ['Gender'];
        $phonenumber= $_POST ['phonenumber'];
        $dateofbirth= $_POST ['dateofbirth'];
        $email= $_POST ['email'];
        $position= $_POST ['position'];
        $address= $_POST ['address'];
        //execute the query

		mysqli_query ($connection, "INSERT INTO staffs (firstname, middlename, lastname, Gender, phonenumber, dateofbirth, email, position, address)
			VALUES ('$firstname', '$middlename', '$lastname', '$Gender', '$phonenumber', '$dateofbirth', '$email', '$position', '$address')   ");

		if (mysqli_affected_rows ($connection)>0)
		{
			echo "<p> Recorded Added Successfully </p>";
		}
        else {echo "<p> NOT Added </p>";
        echo mysql_error($connection);
      
         }
		
		?>
		