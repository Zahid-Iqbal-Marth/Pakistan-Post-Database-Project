<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>

   
   <?php
    //if (isset($_POST['submit']))
     //{
     $db_sid="(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.10.7)(PORT = 1521) ) (CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = Ali2)))"; 
     $db_user = "ZAWF"; 
     $db_pass = "tiger";
     
      $con = oci_connect($db_user,$db_pass); 
      if($con) 
      { 
       echo "Oracle Connection Successful.";
        
      } 
   else 
      { die('Could not connect to Oracle: '); 
      }
    
      $Cid=$_POST['Cid'];
      $b=$_POST['CFName'];
      $c=$_POST['CLName'];
      $d=$_POST['CNIC'];
      $e=$_POST['street'];
      $f=$_POST['sector'];
      $g=$_POST['city'];
	  $h=$_POST['mobile_no'];

     $query=" INSERT INTO Customer 
		VALUES ('$Cid', '$b', '$c', '$d', '$e', '$f', '$g','$h')";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);

      $Mid=$_POST['Track_id'];
      $c=$_POST['desc'];
      $d=$_POST['quantity'];
      $e=$_POST['status'];
      $f=$_POST['date'];	 

    $query=" INSERT INTO Mail (mail_ID,mailType,Qty,status,CurrentDate,bounced)
		VALUES ('$Mid', '$c', '$d', '$e',DATE '$f','No')";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a); 
	 
      $c=$_POST['recFname'];
      $d=$_POST['recLname'];
      $Rid=$_POST['recID'];
      $f=$_POST['rec_St'];
      $g=$_POST['rec_Sc'];
	  $h=$_POST['city'];

     $query=" INSERT INTO Customer (fname,lname,custID,street,sector,city)
		VALUES ('$c', '$d', '$Rid', '$f', '$g','$h')";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);	 
	 
	 $f=$_POST['fee'];
	 
	 $query ="INSERT INTO Invoice 
	 VALUES ('$Cid','$Rid','$Mid','$f')";
	 
	 $a = oci_parse($con, $query); 

     $run = oci_execute($a);	
	 
	 
 if($run)
{
echo "record inserted";
}
else
{
echo "<br>Error while inserting record ";
}

//}

//header("Location: home.php");                 
?>
<form action="staffHome.php" method="post"> 
 <input type="submit" value="Return"></input></form>
  </body>
</html>