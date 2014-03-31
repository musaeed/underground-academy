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
    if (empty($_POST["name"])) 
    {
        $nameErr = "Missing";
		 echo "Missing name!\n";
		 echo" ";
	 }
}


	
?>
	
	
	<body>
		
			<h2>Query One</h2>
			<h3>In this query, you can input the username <br> to get all the files submitted by this user.</h3>
			<h3>Valid Inputs: teodor, omer, Admin</h3>
		   <section class="container">
    <div class="details">
      <form method="post" action="query1res.php">
        <p><input type="text" name="name" value="" placeholder="Name"></p>
        
        <p class="submit"><input type="submit" name="commit" value="Search"></p>
      </form>
    </div>

  </section>

	</body>
</html>