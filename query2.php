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

	<?php
// define variables and initialize with empty values
$nameErr = $surnameErr = $majorErr = $classErr="";
$name = $surname = $major=$class= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
		 echo "Missing name!\n";
		 echo" ";
    }
    else {
        $name = $_POST["name"];
    }
	 
	 if (empty($_POST["surname"])) {
        $surnameErr = "Missing";
		 echo "Missing surname!\n";
		 echo " ";
    }
    else {
        $surname = $_POST["surname"];
    }	 
}


	
?>
	
	
	<body>
		
			<h2>Query two</h2>
		   <section class="container">
    <div class="details">
    	<h3>This query will return all the homeworks uploaded.</h3>
      
<?php      
      $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

		$result = mysqli_query($con,"SELECT Files.Name ,Homeworks.Course ,Files.Major ,Homeworks.Year From Files INNER JOIN Homeworks ON Files.Id = Homeworks.f_Id" );

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Course</th>
<th>Major</th>
<th>Year</th>
</tr>";
      
while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
  	echo "<td>" . $row['Name'] . "</td>"; 
	echo "<td>" . $row['Course'] . "</td>"; 
	echo "<td>" . $row['Major'] . "</td>"; 
	echo "<td>" . $row['Year'] . "</td>"; 
	echo "</tr>";
	}
	echo "</table>";

mysqli_close($con);     
      ?>
      
      
      
    </div>

  </section>

	</body>
</html>