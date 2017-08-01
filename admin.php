<?php
  session_start(oid)

  $servername= "localhost";
  $username="root";
  $password="";
  $database="adminloginpage"

  #start a new connection
  $connection=new mysql ($servername,$username,$password,$database);

  if ($connection ->connect_error){
  	die ("connection failed". $connection ->$connect_error );
  }
  echo "connected succesfully <br>";

  //post code
      if (isset($POST ['submit']));
      //create variables
      $user=$_POST['username'];
      $password=$_POST['password'];
      $solution = mysqli_query ($connection, "SELECT = from admin WHERE username="$users" and password = '$pass'");

      $row=mysqli_fetch_array($solution);
      if (is_array($row)) {
      	$_SESSION['username']=$row[userid];
      	$_SESSION['password']=$row[password];
       }else {
       	echo "incorrect username and password";
       }
       if(isset ($_SESSION['username'])){
       	header("location:libraryformstaffs.php");
       }
       }
      ?>

      <form method="=POST">
      <fieldset>
      	<legend></legend>
      </fieldset>