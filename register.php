<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Underground Academy</title>
		<link rel="shortcut icon" href="favicon.ico" >
		<link rel="icon" href="favicon.ico" type="image/png" >	
		<link rel="stylesheet" type="text/css" href="css/forms.css">
	</head>
	
      <body>
      
      <h1> User registration </h1>
	
      <form action="registerUser.php" method="post">
	First name: <input type="text" name="fname" value="" placeholder="First name"><br>
	Last name: <input type="text" name="lname" value="" placeholder="Last name"><br>
	Major: <input type="text" name="major" value="" placeholder="Major"><br>
	Username: <input type="text" name="username" value="" placeholder="Username"><br>
	Password: <input type="password" name="password" value="" placeholder="Password"><br>
	Gender: <select name="gender"> <option value="male">Male</option> <option value="female">Female</option> </select><br>
	Graduating year: <input type="text" name="year" value="" placeholder="Enter year"><br><br><br>
	<input type="submit" value="Register">
      </form>
       
      </body>
</html>