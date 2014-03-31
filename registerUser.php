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
      $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
      
      if (mysqli_connect_errno())
      {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
      $stmt = $con->prepare('INSERT INTO Users(Id,Username,Class_of, MD5(Password), Major,Status,Name,Surname,Gender,upnumber) VALUES(? , ? , ? , ?, ? , ? , ? , ? , ? , ?)');

      if(!$stmt->bind_param('isssssssss', rand() ,$_POST[username],$_POST[year],$_POST[password], $_POST[major],1,$_POST[fname],$_POST[lname],$_POST[gender],0)){
	echo "failed";
      }
      
      if($stmt->execute()){
	echo "User registered in the database";
      }
      
      $stmt->close();
    ?>
  </body>
</html>