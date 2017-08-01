<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title> MY PHP PAGE</title>
</head>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
#start a new operation
$connection=new mysqli ($servername, $username, $password);
#test conection 
if ($connection ->connect_error) {
die("connection failed". $connection ->connnect_error );
 }
echo "sucessfully connected to your DB";
?>p 




</body> 
</html>