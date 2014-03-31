<html>

<?php
  
    $con=mysqli_connect("flanche.com","mstr","Qi76R6477j","unknown");
      
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $random = rand();
    
    $sql="INSERT INTO Threads (Topic_Id, s_Id , f_Id, Topic, Reference_file) VALUES
	    ($random, '2', '3', '$_POST[tname]', '$_POST[fname]')";
	    
    if (!mysqli_query($con,$sql))
    {
      die('Database Error: ' . mysqli_error($con));
    }
    else
    {
      $file = $_POST[fname];
      echo "New thread created\n";
      echo "<a href=showThreads.php?topic=$random&file=$file>Goto Thread</a>";
    }
    
    mysqli_close($con);
?>

</html>