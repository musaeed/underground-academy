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
		
			<h2>Upload File</h2>
		   <section class="container">
    <div class="details">
    	<h3>This page contains the form to submit a file with details </h3>
      <form method="post" action="insert_upload.php" id="uploadfile" enctype="multipart/form-data">
        <p>Course: <select name="course">
  			<option value="GenCSI">General Computer Science I</option>
  			<option value="GenCSII">General Computer Science II</option>
 			<option value="ESMIA">ESM IA</option>
 			<option value="DBWA">Databases and Web applications</option>
 			<option value="Computer_Networks">Computer Networks</option>
 			<option value="Artificial_Intelligence">Artificial Intelligence</option>
 			<option value="Graphics_and_visualization">Graphics and visualization</option>
 			<option value="Java">Java</option>
 			<option value="C_lab">C lab</option>
 			<option value="Python">Python</option>
 			<option value="Operating_Systems">OS</option>
 			<option value="FunCS">FunCS</option>
 			<option value="Signals_and_Systems">Signals and systems</option>
  			<option value="Electronics">Electronics</option>
  			<option value="Other">Other</option>
		  </select> </p>
        <p>Year: <input type="number" name="fyear" value="" placeholder="Year"></p>
        <p>Major: <select name="major">
  			<option value="EECS">EECS</option>
  			<option value="CS">CS</option>
 			<option value="ECE">ECE</option>
 			<option value="ESS">ESS</option>
 			<option value="IPH">IPH</option>
 			<option value="IMS">IMS</option>
 			<option value="Physics">Physics</option>
 			<option value="ACM">ACM</option>
 			<option value="Chemistry">Chemistry</option>
 			<option value="Math">Math</option>
  			<option value="other">Other</option>
		</select> </p>
		<p>Type: <select name="type">
  			<option value="hw">Homework</option>
  			<option value="hws">Homework Solution</option>
  			<option value="cn">Course Notes</option>
 			<option value="q">Quiz</option>
 			<option value="e">Exam</option>
 			<option value="tn">Tutorial Notes</option>
  			<option value="other">Other</option>
		</select> </p>
		<p>File No: <input type="number" name="fnumber" value="" placeholder="Number"></p>
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