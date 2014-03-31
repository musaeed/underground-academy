<html>
        <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Underground Academy</title>
		<link rel="shortcut icon" href="favicon.ico" >
		<link rel="icon" href="favicon.ico" type="image/png" >	
		<link rel="stylesheet" type="text/css" href="css/forms.css">
	</head>
	<body>
	<h1>Search Results</h1>
	  <?php
	    $text = $_POST["key"];
	    
		$con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		  // Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$stmt = $con->prepare('SELECT Course FROM Files WHERE Course=?');
		
		$stmt->bind_param('s' , $text);
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
	    
	  ?>
	</body>
</html>