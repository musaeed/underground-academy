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
	    $getMajor = $_GET['major'];
	    
	        $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		  // Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$stmt = $con->prepare('SELECT Name FROM Files WHERE Major= ?');
		if(!$stmt->bind_param('s', $getMajor)){
		  echo "Unable to bind parameters";
		}
		$stmt->execute();
		
		$result = $stmt->get_result();  

		echo "<table border='1'>
		<tr>
		<th>File name</th>
		<th>Link</th>
		</tr>";

		while($row = $result->fetch_assoc())
		  {
			echo "<tr>";
				echo "<td>" . $row['Name'] . "</td>";
				$name = $row['Name'];
				echo "<td><a href=DownloadFiles.php?file=$name>Download</a> </td>";
			echo "</tr>";
			}
		  
		echo "</table>";

		mysqli_close($con);
	  ?>
	  
	</body>
	
	
</html>