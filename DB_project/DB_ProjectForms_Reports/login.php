<html>
  <head><title>Confirm</title></head>
  <body><br><br><br>
   <?php
     echo "hhhkk";
     //$db_sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = pc1)(PORT = 1521)) ) (CONNECT_DATA = (SID = orcl) ) )"; 
	 $db_sid="(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = admin-PC)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = orcl)
    )
  )
";
     $db_user = "ZAWF"; 
     $db_pass = "tiger";
     echo "in for";
      $con = oci_connect($db_user,$db_pass); 
	  echo "in for";
      if($con) 
      { echo "in for";
       echo "Oracle Connection Successful.";
        
      } 
   else 
      {
		  echo "in else";
		  die('Could not connect to Oracle: '); 
      }
	 $b=$_POST['staffID'];
     $query="select password from Staff Where staffID='$b'";
     $a = oci_parse($con, $query); 
     $r = oci_execute($a);
	 echo "<br><br>";
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			
			//echo $row[0];
			//echo $row[0];
			//echo $_POST['Password'];
        	if($row[0] == $_POST['Password'])
			{
				//<a href="http://localhost/DB_ProjectForms_Reports/Reg.php">Enter</a> 
				header("Location:http://localhost/DB_ProjectForms_Reports/staffHome.php");
				//echo"ali";
			}
			else
			{
				header("Location:http://localhost/DB_ProjectForms_Reports/send.php");
				//echo"wali";
			}
			
		  }
 
//"aaa";
                  
?>
  </body>
</html>