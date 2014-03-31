<?php
  
  class CheckLogin{
  
  //This function will return true if it validates the user so we dont have to pass username and passwords via URLs just use this
  //function
  
    function validate_user($username, $password){
      
      $con = $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");

      if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "SELECT * FROM Users WHERE username=? AND password = ? LIMIT 1";
	
	if($stmt = $con->prepare($query)){
	
	  $stmt->bind_param('ss' , $username , $password);
	  $stmt->execute();
	  
	  if($stmt->fetch()){
	    $stmt->close();
	    return true;
	  }
	}
	
    }
  
  }
?>