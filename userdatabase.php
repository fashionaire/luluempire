<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "edit_DataBase";
#start a new operation

$connection=new mysqli ($servername, $username, $password, $database);
#test conection 

if ($connection ->connect_error) {
die("connection failed". $connection ->connnect_error );

?>
 
 <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> ADMIN LOG IN PAGE </title>
	 
</head>
<body>


<body style="background-color: grey">
<form method="POST" action="process.php">
<fieldset>
	
	<legend align="center"> <h1> <I> ADMIN LOG IN PAGE </h1> </I> </legend>

	username  <input type="text" name="username">
	<br><br>
	password <input type="text" name="password">
	<br>
	<input type="submit" name="submit" value="submit">

</fieldset>	
</form>
</body>
</html>

