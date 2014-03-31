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
		<h2>Courses</h2>
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

		$stmt = $con->prepare('SELECT DISTINCT Course FROM Files');

		$stmt->execute();
		
		$result = $stmt->get_result();  

		echo "<table border='1'>
		<tr>
		<th>Course</th>
		<th>Files</th>
		</tr>";

		while($row = $result->fetch_assoc())
		  {
			echo "<tr>";
				echo "<td>" . $row['Course'] . "</td>";
				$major = $row['Course'];
				echo "<td><a href=showFilesCourses.php?course=$major>Show files</a> </td>";
			echo "</tr>";
			}
		  
		echo "</table>";

		mysqli_close($con);
		
	  }
		?>
	</body>
</html>

