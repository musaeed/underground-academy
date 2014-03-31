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
    if (empty($_POST["name"])) 
    {
		 echo "You gave empty input\n";
		 break;
	 }
  }
  
  
  $name = htmlspecialchars($_POST['name']);

  
  
  
  $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$stmt = $con->prepare('SELECT Name FROM Files WHERE (SELECT Users.Id FROM Users WHERE Users.Username=(?))=Files.user_Id');
$stmt->bind_param('s', $name);  
$stmt->execute();


$result = $stmt->get_result();

echo "<table border='1'>
<tr>
<th>File Name</th>
<th>Details</th>
</tr>";

$count=0;
// while($row = mysqli_fetch_array($result))
while($row = $result->fetch_assoc())
{
  	echo "<tr>";
  	echo "<td>" . $row['Name'] . "</td>";
  	if($count==0)
	{
		
  		echo "<td>" . '<a href="results.php?name=1" >Details</a>' . "</td>";
  		echo "</tr>";
  		$count=$count+1;
  	}
	else 
	{
		echo "<td>" . '<a href="results.php?name=2" >Details</a>' . "</td>";
  		echo "</tr>";
	}	
		
	}
  
echo "</table>";

mysqli_close($con);
  
  
  
  ?>
  
</body>
</html>