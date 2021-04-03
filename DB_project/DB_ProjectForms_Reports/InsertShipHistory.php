<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>

   
   <?php
    //if (isset($_POST['submit']))
     //{
     $db_sid="(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.10.7)(PORT = 1521) ) (CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = Ali2)))"; 
     $db_user = "ZAWF"; 
     $db_pass = "tiger";
     echo"Update";
      $con = oci_connect($db_user,$db_pass); 
      if($con) 
      { 
       echo "Oracle Connection Successful.";
        
      } 
   else 
      { die('Could not connect to Oracle: '); 
      }
    
    
      $b=$_POST['ARN'];
      $c=$_POST['MailID'];
      $e=$_POST['Origin'];
      $f=$_POST['dest'];
	  $d=$_POST['con'];	  
      $g=$_POST['Booking_Date']; 

     $query=" INSERT INTO Shipment_Details
		VALUES ('$b', '$c' ,'$d','$e','$f',DATE '$g')";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);
	 {
     $query1=" Update Mail set delievererID='$b' where mail_ID='$c'";

     $a1 = oci_parse($con, $query1); 

     $run1 = oci_execute($a1);		 
	 }
 if($run)
{
echo "record updated";
}
else
{
echo "<br>Error while inserting record ";
}



header("Location: staffHome.php");                   
?>
</body>
</html>