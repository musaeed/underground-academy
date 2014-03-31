<html>
    	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Underground Academy</title>
		<link rel="shortcut icon" href="favicon.ico" >
		<link rel="icon" href="favicon.ico" type="image/png" >	
		<link rel="stylesheet" type="text/css" href="css/forms.css">
	</head>
	
	<body>
	  <?php
	      $course = $_GET[course];
	      
	      $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		  // Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$stmt = $con->prepare('SELECT Files.Course, Files.Name,Files.Type FROM Files WHERE Files.Course = ?');
		
		$stmt->bind_param('s' , $course);

		$stmt->execute();
		
		$result = $stmt->get_result();  

		echo "<table border='1'>
		<tr>
		<th>Name</th>
		<th>Type</th>
		<th>Link</th>
		</tr>";

		while($row = $result->fetch_assoc())
		  {
			echo "<tr>";
				echo "<td>" . $row['Name'] . "</td>";
				$major = $row['Name'];
				echo "<td>" . $row['Type'] . "</td>";
				echo "<td><a href=DownloadFiles.php?file=$major>Download</a> </td>";
			echo "</tr>";
			}
		  
		echo "</table>";

		mysqli_close($con);
	  ?>
	</body>
<html>