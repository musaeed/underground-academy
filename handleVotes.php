<html>

  <?php  
	  $topic = $_POST["topicID"];
	  $votes = $_POST["votes"];
  
    	    if($_POST['action'] == 'Up Vote'){
    	    
		  $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		    // Check connection
		  if (mysqli_connect_errno())
		    {
		      echo "Failed to connect to MySQL: " . mysqli_connect_error();
		    }

		    $stmt = $con->prepare('UPDATE Threads SET Votes =?
					  WHERE Topic_id=?');
		    $nOfVotes = $GLOBALS['votes'] + 1;
		    $stmt->bind_param('ss' , $nOfVotes , $GLOBALS['topic']);
		
		    $stmt->execute();
		    
		    mysqli_close($con);
	    
	    }
	    else if($_POST['action'] == 'Down Vote'){
	      
		  $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
		    // Check connection
		  if (mysqli_connect_errno())
		    {
		      echo "Failed to connect to MySQL: " . mysqli_connect_error();
		    }

		    $stmt = $con->prepare('UPDATE Threads SET Votes =?
					  WHERE Topic_id=?');
		    $n = $GLOBALS['votes'] - 1;
		    $stmt->bind_param('ss' , $n , $GLOBALS['topic']);
		
		    $stmt->execute();
		    
		    mysqli_close($con);
	    }
	?>
	  <script>
	    window.location.href=("showThreads.php?topic=<?php echo $GLOBALS['topic'];?>");
  	  </script>
  
</html>