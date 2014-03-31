<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Underground Academy</title>
		<link rel="shortcut icon" href="favicon.ico" >
		<link rel="icon" href="favicon.ico" type="image/png" >	
		<link rel="stylesheet" type="text/css" href="css/styles2.css">
		
	</head>

<body>	
<?php
	
	session_start();
		$check = $_SESSION['loginstate'];
	  if ($check != 1)
	  {
	  	
		echo '<h1>Please Login or Register</h1>';
		
	  }
	  
	  else {
	
	
  $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
  
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $ran = rand();
    $ran2 = rand();
    $sql = "";
    $sqlFile = "";
    $size = $_FILES["myfile"]["size"];
    $name = $_FILES["myfile"]["name"];
    $file_result = "";
    $usID = 0;
    
    if($_POST[type] == 'hw'){
      $sql .="INSERT INTO Homeworks (hw_Id, Number, Year, Course, Size, f_Id) VALUES
	    ('$ran', '1', '$_POST[fyear]', '$_POST[course]', '$size', '$ran2')";
	    
	     $sqlFile .= "INSERT INTO Files (Id , Name , Major,Course,Type , user_Id) VALUES
	    ('$ran2' ,'$name' , '$_POST[major]','$_POST[course]','Homework' , '$usID')";
	    
    if($_FILES["myfile"]["error"]){
      $file_result .= "File corrupted ";
      $file_result .= "Error code: " . $_FILES["myfile"]["error"] . "<br>";
    }
    else
    {
      $file_result .=
      "Upload: " . $_FILES["myfile"]["name"] ."<br>" .
      "Type: " . $_FILES["myfile"]["type"] ."<br>" .
      "Size: " . ($_FILES["myfile"]["size"] / 1024) . "Kb<br>".
      "File successfully uploaded!";
     if(!move_uploaded_file($_FILES["file"]["tmp_name"],"/people/home/musaeed/public_html/uploads/homeworks/" . $_FILES["file"]["name"])){
     }
    }
	   
    }
    
    if($_POST[type] == 'hws'){
      $sql .="INSERT INTO HW_solutions (hws_Id, Number, Year, Course, Size, f_Id) VALUES
	    ('$ran', '1', '$_POST[fyear]', '$_POST[course]', '$size', '$ran2')";
       $sqlFile .= "INSERT INTO Files (Id , Name , Major,Course,Type , user_Id) VALUES
	    ('$ran2' ,'$name' , '$_POST[major]','$_POST[course]','Homework solutions' , '$usID')";
	    
    if($_FILES["myfile"]["error"]){
      $file_result .= "File corrupted ";
      $file_result .= "Error code: " . $_FILES["myfile"]["error"] . "<br>";
    }
    else
    {
      $file_result .=
      "Upload: " . $_FILES["myfile"]["name"] ."<br>" .
      "Type: " . $_FILES["myfile"]["type"] ."<br>" .
      "Size: " . ($_FILES["myfile"]["size"] / 1024) . "Kb<br>".
      "File successfully uploaded!";
     if(!move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/homeworkSolutions/" . $_FILES["file"]["name"])){

     }
    }
    }
    
    if($_POST[type] == 'cn'){
      $sql .="INSERT INTO Course_notes (cn_Id, Number, Year, Course, Size, f_Id) VALUES
	    ('$ran', '1', '$_POST[fyear]', '$_POST[course]', '$size', '$ran2')";
	    
	    	     $sqlFile .= "INSERT INTO Files (Id , Name , Major,Course,Type , user_Id) VALUES
	    ('$ran2' ,'$name' , '$_POST[major]','$_POST[course]','Course notes' , '$usID')";
	    
    if($_FILES["myfile"]["error"]){
      $file_result .= "File corrupted ";
      $file_result .= "Error code: " . $_FILES["myfile"]["error"] . "<br>";
    }
    else
    {
      $file_result .=
      "Upload: " . $_FILES["myfile"]["name"] ."<br>" .
      "Type: " . $_FILES["myfile"]["type"] ."<br>" .
      "Size: " . ($_FILES["myfile"]["size"] / 1024) . "Kb<br>".
      "File successfully uploaded!";
     if(!move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/ClassNotes/" . $_FILES["file"]["name"])){

     }
    }
    }
    
    if($_POST[type] == 'q'){
      $sql .="INSERT INTO Quizzes (q_Id, Number, Year, Course, Size, f_Id) VALUES
	    ('$ran', '1', '$_POST[fyear]', '$_POST[course]', '$size', '$ran2')";
	    
	$sqlFile .= "INSERT INTO Files (Id , Name , Major,Course,Type , user_Id) VALUES
	    ('$ran2' ,'$name' , '$_POST[major]','$_POST[course]','Quiz' , '$usID')";
	    
     if($_FILES["myfile"]["error"]){
      $file_result .= "File corrupted ";
      $file_result .= "Error code: " . $_FILES["myfile"]["error"] . "<br>";
    }
    else
    {
      $file_result .=
      "Upload: " . $_FILES["myfile"]["name"] ."<br>" .
      "Type: " . $_FILES["myfile"]["type"] ."<br>" .
      "Size: " . ($_FILES["myfile"]["size"] / 1024) . "Kb<br>".
      "File successfully uploaded!";
     if(!move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/quizzes/" . $_FILES["file"]["name"])){
     }
    }
    
    }
    
    if($_POST[type] == 'e'){
      $sql .="INSERT INTO Exams (e_Id, Number, Year, Course, Size, f_Id) VALUES
	    ('$ran', '1', '$_POST[fyear]', '$_POST[course]', '$size', '$ran2')";
	    
      $sqlFile .= "INSERT INTO Files (Id , Name , Major,Course,Type , user_Id) VALUES
	    ('$ran2' ,'$name' , '$_POST[major]','$_POST[course]','Exam' , '$usID')";
	    
    if($_FILES["myfile"]["error"]){
      $file_result .= "File corrupted ";
      $file_result .= "Error code: " . $_FILES["myfile"]["error"] . "<br>";
    }
    else
    {
      $file_result .=
      "Upload: " . $_FILES["myfile"]["name"] ."<br>" .
      "Type: " . $_FILES["myfile"]["type"] ."<br>" .
      "Size: " . ($_FILES["myfile"]["size"] / 1024) . "Kb<br>".
      "File successfully uploaded!";
     if(!move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/exams/" . $_FILES["file"]["name"])){
     }
    }
    }
    
    if($_POST[type] == 'tn'){
      $sql .="INSERT INTO Tutorial_notes (tn_Id, Number, Year, Course, Size, f_Id) VALUES
	    ('$ran', '1', '$_POST[fyear]', '$_POST[course]', '$size', '$ran2')";
	    
     $sqlFile .= "INSERT INTO Files (Id , Name , Major,Course,Type , user_Id) VALUES
	    ('$ran2' ,'$name' , '$_POST[major]','$_POST[course]','Tutorial notes' , '$usID')";
	    
    if($_FILES["myfile"]["error"]){
      $file_result .= "File corrupted ";
      $file_result .= "Error code: " . $_FILES["myfile"]["error"] . "<br>";
    }
    else
    {
      $file_result .=
      "Upload: " . $_FILES["myfile"]["name"] ."<br>" .
      "Type: " . $_FILES["myfile"]["type"] ."<br>" .
      "Size: " . ($_FILES["myfile"]["size"] / 1024) . "Kb<br>".
      "File successfully uploaded!";
     if(!move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/tutorialNotes/" . $_FILES["file"]["name"])){
     }
    }
    
    }
    
  $stmt = $con->prepare($sql);
   
     if (!$stmt->execute())
      {
        die("Database Error: " . mysqli_error($con));
      }
      else
      {

        if(mysqli_query($con , $sqlFile)){

        }
      }
      
      
    mysqli_close($con);
    echo "<font size=10 color=red>$file_result</font>";
    
    }
    
?>
</body>
</html>