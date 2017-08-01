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
$database = "cardatabase";
#start a new operation
$connection=new mysqli ($servername, $username, $password, $database);
echo "sucessfully connected to your DB <BR>";
#test conection 
if ($connection ->connect_error) {
die("connection failed". $connection ->connnect_error );
 }
echo "sucessfully connected to your DB <br>";
//Selecting Database from server

$sql = "select * from customers";
$result = mysqli_query($connection,$sql) ;


if (mysqli_num_rows ($result)>0) 
{
while ($row= mysqli_fetch_assoc($result)) 
{
	echo "firstname=" .$row ["firstname"].
		"lastname=" .$row ["lastname"].
		"gender=" .$row ["gender"].
		"phonenumber=" .$row["phonenumber"].
		"email=" .$row["email"].
		"address=" .$row["address"].
		"<br> <br>";
		
	}	
}
else
{echo "0 results";}
$sql="select firstname, lastname, gender, phonenumber, email, address from customers where firstname='khan' ";
$answer= mysqli_query ($connection, $sql);

echo "<table border=1>";
echo "<tr style='background-color:maroon; text-align:center; color:white;'> 
<td>firstname</td>
  <td>lastname</td> 
  <td>gender</td>
   <td>phonenumber</td> 
   <td>email</td>
    <td>address</td> 
    </tr>";



$row = mysqli_fetch_assoc($answer);
echo "<tr>
        <td>" .$row['firstname']."</td>
		<td>" .$row ['lastname']."</td>
		<td>" .$row ['gender']."</td>
		<td>" .$row['phonenumber']."</td>
		<td>" .$row['email']."</td>
		<td>" .$row['address']."</td> 
		</tr>";
		mysqli_close ($connection);

?>





</body> 
</html>