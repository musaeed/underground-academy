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
	      $topic = $_GET[topic];
	      $file = $_GET[file];
	      $votes = $_GET[votes];
	      
	      $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		  // Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$stmt = $con->prepare('SELECT Posts.POST FROM Posts WHERE Posts.Topic_id = ?');
		
		$stmt->bind_param('s',$topic);
		$stmt->execute();
		
		$result = $stmt->get_result();  

		echo "<table border='1'>
		<tr>
		<th>Comment</th>
		</tr>";

		while($row = $result->fetch_assoc())
		  {
			echo "<tr>";
				echo "<td>" . $row['POST'] . "</td>";
			echo "</tr>";
			}
		  
		echo "</table>";

		mysqli_close($con);
		
		function addToPosts($data){
		$con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		  // Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$stmt = $con->prepare('INSERT INTO Posts (Topic_id , POST) VALUES(?,?)');
		
		$stmt->bind_param('ss',$GLOBALS['topic'] , $data);
		$stmt->execute();
		
		mysqli_close($con);
		}
	  ?>
	  <form method="post" action="Addcomment.php">
	    <textarea name="area" rows="5" cols="50"></textarea>
	    <input type="hidden" name="topic" value="<?php echo $GLOBALS['topic'];?>">
	    <input type="submit" value="Post comment">
	  </form>
	  	  
	  <form name="input" action="handleVotes.php" method="post">
	    <input type="submit" name="action" value="Up Vote"/>
	    <input type="submit" name="action" value="Down Vote"/>
	    <input type="hidden" name="topicID" value="<?php echo $GLOBALS['topic'];?>">
	    <input type="hidden" name="votes" value="<?php echo $GLOBALS['votes'];?>">
	  </form>
	  
	  
	</body>

</html>