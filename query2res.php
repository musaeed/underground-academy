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
	
	<body>
		<h2>Results</h2>

<?php
  // The global $_POST variable allow to access the data send with the POST method
  // To access the data send with the GET method, you can use $_GET
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if (empty($_POST["id"])) 
    {
		 echo "You gave empty input\n";
		 break;
	 }
  }
  
  
  $name = htmlspecialchars($_POST['id']);

  echo  $name;
  
  ?>
  </body>
  </html>