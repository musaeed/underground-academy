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
$nameErr = $yearErr = $fnumErr="";
$name = ""; 
$res=0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $nameErr = "Missing";
		 echo "Missing name!\n";
		 echo" ";
		 $res=1;
		
    }
    else {
        $name = $_POST["fname"];
		  
    }
	 
	 if (empty($_POST["myfile"])) {
        
		 echo "Select a file to upload!\n";
		 echo" ";
		 $res=1;
		
    }
	 
	 
	 if($res==0)
	 {
	 	echo "Succesful Upload\n";
		echo" ";
		
	 }
	 else {
		 echo "Error in upload!\n";
		 echo" ";
	 }
}
		
?>	
		
		
			<h2>Upload File</h2>
		   <section class="container">
    <div class="details">
    	<h3>This page contains the form to submit a file with details </h3>
      <form method="post" action="insert_upload.php" id="uploadfile">
        <p>Name: <input type="text" name="fname" value="" placeholder="File Name"></p>
        
        <p>Course: <select name="course">
  			<option value="GenCSI">General Computer Science I</option>
  			<option value="GenCSII">General Computer Science II</option>
 			<option value="ESMIA">ESM IA</option>
  			<option value="other">Other</option>
		  </select> </p>
		  
        <p>Year: <select name="year">
			<option value="2001">2001</option>
  			<option value="2002">2002</option>
  			<option value="2003">2003</option>
 			<option value="2004">2004</option>
 			<option value="2005">2005</option>
 			<option value="2006">2006</option>
 			<option value="2007">2007</option>
 			<option value="2008">2008</option>
 			<option value="2009">2009</option>
 			<option value="2010">2010</option>
 			<option value="2011">2011</option>
 			<option value="2012">2012</option>
 			<option value="2013">2013</option>
		</select></p>
        <p>Major: <select name="major">
  			<option value="EECS">EECS</option>
  			<option value="CS">CS</option>
 			<option value="ECE">ECE</option>
  			<option value="other">Other</option>
		</select> </p>
		<p>Type: <select name="type">
  			<option value="hw">Homework</option>
  			<option value="hws">Homework Solution</option>
  			<option value="cn">Course Notes</option>
 			<option value="q">Quiz</option>
 			<option value="e">Exam</option>
 			<option value="tn">Tutorial Notes</option>
  		</select> </p>
		<p>File No: <select name="file">
			<option value="val">1</option>
  			<option value="val">2</option>
  			<option value="val">3</option>
 			<option value="val">4</option>
 			<option value="val">5</option>
 			<option value="val">6</option>
 			<option value="val">7</option>
 			<option value="val">8</option>
 			<option value="val">9</option>
 			<option value="val">10</option>
 			<option value="val">11</option>
 			<option value="val">12</option>
 			<option value="val">13</option>
 			<option value="val">NAN</option>
		</select> </p>
		<p>Version: <select name="version">
			<option value="NA">NAN</option>
  			<option value="va">A</option>
  			<option value="vb">B</option>
 			<option value="vc">C</option>
 			<option value="vd">D</option>
 			<option value="ve">E Notes</option>
		</select> </p>
		<p><input type="file" name="myfile" value=""></p>
        <p class="submit"><input type="submit" name="commit" value="Upload"></p>
      </form>
      
      
    </div>

  </section>

	</body>
</html>