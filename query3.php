<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Underground Academy</title>
		<link rel="shortcut icon" href="favicon.ico" >
		<link rel="icon" href="favicon.ico" type="image/png" >	
		<link rel="stylesheet" type="text/css" href="css/forms.css">
	</head>
	
	<body>
		<h2>Results</h2>
<?php
  

  $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

		$result = mysqli_query($con,"SELECT upnumber, Username, Class_of From Users WHERE upnumber = 55;" );

echo "<table border='1'>
<tr>
<th>Number</th>
<th>Username</th>
<th>Class of</th>
</tr>";
      
while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
  	echo "<td>" . $row['upnumber'] . "</td>"; 
	  	echo "<td>" . $row['Username'] . "</td>"; 
		  	echo "<td>" . $row['Class_of'] . "</td>"; 
	echo "</tr>";
	}
	echo "</table>";

mysqli_close($con);     
  
  
  
  
  
  
  ?>
  </body>
</html>