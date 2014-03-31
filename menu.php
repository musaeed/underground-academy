<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Underground Academy</title>
        <link rel="shortcut icon" href="favicon.ico" >
		  <link rel="icon" href="favicon.ico" type="image/png" >	
		  <link rel="stylesheet" type="text/css" href="css/styles1.css">
    </head>
	
	
	
	<body>
	<header>
		
		<div class="holder1">
	  <nav id="menu">
		<div class="menu_logo">
			<a href="main.html" target="MAIN">Underground Academy</a>
		</div>
		
		<div class="menu_text">
			<a href="main.html" target="MAIN">&nbsp; &nbsp; &nbsp; &nbsp; Home    &nbsp;&nbsp;  </a>
			<a href="courses.php" target="MAIN">  Courses   &nbsp;&nbsp;   </a>
			<a href="majors.php" target="MAIN">  Majors   &nbsp;&nbsp;   </a>
			<a href="upload.php" target="MAIN">  Upload   &nbsp;&nbsp;   </a>
			<a href="Threads.php" target="MAIN"> Threads   &nbsp;&nbsp; </a>
			<a href="list.php" target="MAIN">  Links  </a>
			
		<div class="login_state">
			<?php
			
			
			session_start();
			if(isset($_SESSION['loginstate']))
			$status = $_SESSION['loginstate'];
			else {
				$status = '0';
			}
			
			
			if ($status =='0')
			{
				
				echo "<a href=loginr.php target=MAIN>  Login </a> / <a href=register.php target=MAIN> Register  &nbsp;</a>";
			}
				
			else {
				echo "root / <a href=logout.php target=index.html>  Logout<a>";
			}
			
			?>
			<div class="search_bar">
			<form name="search" action="result.php" target="MAIN" method="post">
				<input type="text" name="key"  size="18" onfocus="if(this.value==this.defaultValue){this.value='';}" value="Search Courses"> <input type="submit" value="Search">
			</form>
		</div>
		</div>
		</div>
	  </nav>
	  
	</div>
	
		</header>
	
	</body>
</html>

