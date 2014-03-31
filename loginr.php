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


<?php
// define variables and initialize with empty values
$nameErr = $passErr = "";
$name = $pass = "";
$login_state=0;

$c=0;
$a=0;
$g=0;
$k=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["login"])) {
        $nameErr = "Missing";
			$k=1;
    }
	 
    else {
        $name = $_POST["login"];
		 if(strcmp($name, "root") != 0)
		{
			$a=1;
			 
		}
		 else {
			 $c=$c +1;
		 }
    }
	 
	 
	 
	 
	 if (empty($_POST["password"])) {
        $passErr = "Missing";
		 $g=1;
		
    }
    else {
        $pass = $_POST["password"];
		 if(strcmp($pass, "root") != 0)
		{
			$a=1;
		}
		 else
		 	{
		 		$c=$c +1;
		 	}
		
    }
	 
	 
}
	if($g==1 && $k==1)
	{
		echo "Please insert something, whatever, dont leave everything blank!!! ";
	   echo "  --- This hurts the feelings of the program :(... ";
		
	}
	elseif($k==1)
	{
	echo "Missing username!";
	}
elseif($g==1)
{
	echo "Missing password";
}




	if($c==2)
	{
		echo "Correct Login!";
		session_start();
		$_SESSION['loginstate'] = '1';
		header('Location: index.html');	
		$login_state=1;
		
	}
	
	if($a==1)
	{
			echo "Wrong Username or Password";
			$_SESSION['loginstate'] = '0';
	}
	
	
?>



			<h2>Login</h2>
		   <section class="container">
    <div class="login">
    	<h3>This login page will take as valid username the Jacobs University Id </h3>
    	<h3>For testing, the only working username and pass are root and root</h3>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" target="index.html"> 
      	
        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        
      </form>
    </div>
    

  </section>



	</body>
</html>


