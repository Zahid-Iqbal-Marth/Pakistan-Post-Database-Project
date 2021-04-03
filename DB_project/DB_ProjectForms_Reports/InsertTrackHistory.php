<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>

   
   <?php
    //if (isset($_POST['submit']))
     //{
     $db_sid="(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.10.7)(PORT = 1521) ) (CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = Ali2)))"; 
     $db_user = "ZAWF"; 
     $db_pass = "tiger";
     echo"INSERT";
      $con = oci_connect($db_user,$db_pass); 
      if($con) 
      { 
       echo "Oracle Connection Successful.";
        
      } 
   else 
      { die('Could not connect to Oracle: '); 
      }
    
    
      $b=$_POST['TrackID'];
      $c=$_POST['MailID'];
      $d=$_POST['Loc'];
      $e=$_POST['date'];
      $f=$_POST['time'];
      $g=$_POST['status']; 

     $query=" INSERT INTO Tracking_history 
		VALUES ('$b', '$c', '$d',DATE '$e', '$f', '$g')";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);
	 
	  $query2=" Update Mail 
			SET status='$g'
			WHERE	mail_ID='$c'";

     $a2 = oci_parse($con, $query2); 
	 

     $run2 = oci_execute($a2);
 if($run)
{
echo "record inserted";
}
else
{
echo "<br>Error while inserting record ";
}


header("Location: staffHome.php");                 
?>
</body>
</html>