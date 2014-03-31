<?php

session_start();
		$check = $_SESSION['loginstate'];
	  if ($check != 1)
	  {
	  	
		echo '<h1>Please Login or Register</h1>';
		
	  }
	  
	  else {
$con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$sql="INSERT INTO Users (Id, Username, Password, Status, Name, Surname, Major, Class_of, Gender)
VALUES
('1', 'Test1', 'root', '1', '$_POST[name]', '$_POST[surname]', '$_POST[major]', '$_POST[type]', '$_POST[sex]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
	  }
?> 