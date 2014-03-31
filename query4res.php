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
  // The global $_POST variable allow to access the data send with the POST method
  // To access the data send with the GET method, you can use $_GET
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if (empty($_POST["number"])) 
    {
		 echo "You gave empty input\n";
		 break;
	 }
  }
  
  
  $number = htmlspecialchars($_POST['number']);

  
  
  
  $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$stmt = $con->prepare('SELECT Username, upnumber, Class_of, Major FROM Users WHERE upnumber>(?)');
$stmt->bind_param('s', $number);
  
$stmt->execute();

$result = $stmt->get_result();

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Upnumber</th>
<th>Class of</th>
<th>Major</th>
</tr>";

while($row = $result->fetch_assoc())
  {
  	echo "<tr>";
	  	echo "<td>" . $row['Username'] . "</td>"; 
		  	echo "<td>" . $row['upnumber'] . "</td>"; 
		  	echo "<td>" . $row['Class_of'] . "</td>"; 
			  	echo "<td>" . $row['Major'] . "</td>"; 
	echo "</tr>";
	}

  
echo "</table>";

mysqli_close($con);
  
  
  
  
  
  
  
  
  
  ?>
  

</body>
</html>