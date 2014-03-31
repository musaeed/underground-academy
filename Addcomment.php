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
	      
	      $text = $_POST["area"];
	      $topic = $_POST["topic"];
	      
	      $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		  // Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$stmt = $con->prepare('INSERT INTO Posts (Topic_id , POST) VALUES(?,?)');
		
		$stmt->bind_param('ss',$topic , $text);
		$stmt->execute();
		
		mysqli_close($con);
	  
	  ?>
  	  <script>
	    window.location.href=("showThreads.php?topic=<?php echo $GLOBALS['topic'];?>");
  	  </script>
	</body>
</html>