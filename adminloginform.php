<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> ADMIN LOG IN PAGE </title>
	 
</head>
<body>


<body style="background-color: silver">

<form method="POST" action="adminloginform.php">
<fieldset>
	
	<legend align="center"> <h1> <I>  ADMIN LOGIN </h1> </I> </legend>

	username <input type="text" name="username">
	<br><br>
	password <input type="password" name="password">
	<br><br>
	<input type="submit" name="submit" value="send">

	

</fieldset>	
</form>
</body>
</html>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "adminloginpage";
#start a new operation
$connection=new mysqli ($servername, $username, $password, $database);
#test connection
if($connection ->connect_error) {
die("connection failed". $connection ->connect_error);
}
echo "succesfully connected to your DB <br>";

if(isset($_POST['submit'])) {

$user = $_POST['username'];
$pass = $_POST['password'];

	$resut=mysqli_query($connection,"SELECT * FROM users WHERE username='$user' and password='$pass'");
     $row=mysqli_fetch_array($resut); 

     if(is_array($row))

     {
     	$_SESSION['user'] = $row['user'];
     	$_SESSION['username'] = $row['username'];

     header("location: http://localhost/editindexpage.php");
     }
     else {echo "incorrect ousername or password";
 }

 }


?>