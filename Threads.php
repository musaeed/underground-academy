<html>
  	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Underground Academy</title>
		<link rel="shortcut icon" href="favicon.ico" >
		<link rel="icon" href="favicon.ico" type="image/png" >	
		<link rel="stylesheet" type="text/css" href="css/forms.css">
	</head>
	
	<body>
		<h2>Threads</h2>
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

		$stmt = $con->prepare('SELECT Threads.Topic , Threads.Reference_File, Threads.Topic_Id, Threads.Votes FROM Threads');

		$stmt->execute();
		
		$result = $stmt->get_result();  

		echo "<table border='1'>
		<tr>
		<th>Topic</th>
		<th>Reference file</th>
		<th>Votes</th>
		<th>Link</th>
		</tr>";

		while($row = $result->fetch_assoc())
		  {
			echo "<tr>";
				echo "<td>" . $row['Topic'] . "</td>";
				echo "<td>" . $row['Reference_File'] . "</td>";
				echo "<td>" . $row['Votes'] . "</td>";
				$topicID = $row['Topic_Id'];
				$file = $row['Reference_File'];
				$votes=$row['Votes'];
				echo "<td><a href=showThreads.php?topic=$topicID&file=$file&votes=$votes>Goto Thread</a> </td>";
			echo "</tr>";
			}
		  
		echo "</table>";

		mysqli_close($con);
		
		echo "<a href=thread.html>Start a new thread</a>";
	}
	  ?>
	</body>

</html>