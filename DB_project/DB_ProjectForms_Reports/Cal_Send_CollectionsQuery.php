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
    
    
      $b=$_POST['B_ID'];
      $c=$_POST['y'];
      $d=$_POST['m'];
      $e=$_POST['d'];
	  $dat=$_POST['date'];
	  //calculating total collections of one day of any specified branch
	  

     $query=" select sum(fee),Count(fee) from Branch Br,Staff st ,Mail M ,Invoice I
			  WHERE Br.BranchID='$b' AND Br.BranchID=st.branchID AND staffID=M.delievererID AND M.Mail_ID=I.PackageID
			  AND M.CurrentDate=DATE '$dat'";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);
	 
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			 $collected=$row[0];
			 $NoOfCol=$row[1];
		  }
		 echo $collected; echo"<br><br>";
		 echo $NoOfCol;echo"<br><br>";
	//Inserting total collections of one day of any specified branch
	$amReturned=$collected * 0.95;
     $query=" INSERT INTO Collections (BranchID,d,m,y,amCollected,amReturned,NoOfCol)
			  VALUES ('$b','$e','$d','$c','$collected','$amReturned','$NoOfCol')";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);	

	//Fetching GPO_ID of that Branch

     $query=" select GPO_ID from Branch
			  WHERE BranchID='$b'";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);
	 
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			 $GPO_ID=$row[0];
		  }
		  echo $GPO_ID;
	
	 //Fetching previous calculated amount
	 $query=" select amCollected,NoOfCol from Collections
			  WHERE BranchID='$GPO_ID' AND d='$e' AND m='$d' AND y='$c'";

     $a = oci_parse($con, $query); 

     $run = oci_execute($a);
	 $PreCollections=0;
	 $NOC=0;
     while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			 $PreCollections=$row[0];
			 $NOC=$row[0];
		  }
	
	//Adding collected amount into GPO's collections	  
		  
	 $z=0;
	 $newCol=$collected+$PreCollections;
	 $newNOC=$NoOfCol+$NOC;
	 if($PreCollections==0){
     $query=" INSERT INTO Collections
			  VALUES ('$GPO_ID','$e','$d','$c','$newCol','$z','$NoOfCol')";
	 }
	 else
	 {
     $query=" UPDATE Collections SET amCollected='$newCol' , NoOfCol= '$newNOC' ";	 
	 }
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



header("Location:staffHome.php");                 
?>
</body>
</html>