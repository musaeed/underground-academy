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
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
		 echo "Missing name!\n";
		 echo" ";
    }
    else {
        $name = $_POST["name"];
    }
	 
	 if (empty($_POST["surname"])) {
        $surnameErr = "Missing";
		 echo "Missing surname!\n";
		 echo " ";
    }
    else {
        $surname = $_POST["surname"];
    }	 
}

	
?>
	
	
	<body>
		
			<h2>Details</h2>
		   <section class="container">
    <div class="details">
    	<h3>This page contains the details of the user </h3>
      <form method="post" action="insert_details.php">
        <p><input type="text" name="name" value="" placeholder="Name"></p>
        
        <p><input type="text" name="surname" value="" placeholder="Surname"></p>
        
        <p>Major: <select name="major">
  			<option value="EECS">EECS</option>
  			<option value="CS">CS</option>
 			<option value="ECE">ECE</option>
  			<option value="other">Other</option>
		</select> </p>
		
        <p>Class of: <select name="type">
			<option value="valy">2001</option>
  			<option value="valy">2002</option>
  			<option value="valy">2003</option>
 			<option value="valy">2004</option>
 			<option value="valy">2005</option>
 			<option value="valy">2006</option>
 			<option value="valy">2007</option>
 			<option value="valy">2008</option>
 			<option value="valy">2009</option>
 			<option value="valy">2010</option>
 			<option value="valy">2011</option>
 			<option value="valy">2012</option>
 			<option value="valy">2013</option>
 			<option value="valy">2014</option>
 			<option value="valy">2015</option>
 			<option value="valy">2016</option>
 			<option value="valy">Alumni</option>
		</select> </p>
        <p><input type="radio" name="sex" value="male">Male<br><input type="radio" name="sex" value="female">Female</p>
        <p class="submit"><input type="submit" name="commit" value="Save"></p>
      </form>
    </div>

  </section>

	</body>
</html>