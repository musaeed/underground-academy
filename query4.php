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
		
			<h2>Query 4</h2>
		   <section class="container">
    <div class="details">
    	<h3>Find all the users who have the upload number greater than a certain number</h3>
      <form method="post" action="query4res.php">
        <p><input type="text" name="number" value="" placeholder="Upload count"></p>
        

        <p class="submit"><input type="submit" name="commit" value="Search"></p>
      </form>
    </div>

  </section>

	</body>
</html>