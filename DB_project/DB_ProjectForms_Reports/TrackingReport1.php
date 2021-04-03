<html>
<head><title>Tracking Resluts</title>
	<style>
		th{
			text-align: left;
		}
	</style>
</head>
	<style>
	.topnav {
	  background-color: #333;
	  overflow: hidden;
	}

	.topnav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

	.topnav a.active {
	  background-color: #4CAF50;
	  color: white;
	}
	</style>
		<body>
			<div>
				<img src = "logo.jpg"  width="100%" height="35%">
			</div>
			<div class="topnav">
				<a class="active" href="staffHome.php">Home</a>
			</div>
	  <?php
   // echo "hhhkk";
     //$db_sid = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = pc1)(PORT = 1521)) ) (CONNECT_DATA = (SID = orcl) ) )"; 
     $db_user = "ZAWF"; 
     $db_pass = "tiger";
//     echo "in for";
      $con = oci_connect($db_user,$db_pass); 
//	  echo "in for";
	 $b=$_POST["track_no"];
  /*   $query="select * from Tracking_history where TrackNo='$b'";
     $a = oci_parse($con, $query); 
     $r = oci_execute($a); */
	 
	 $query2="select * from Shipment_Details where mail_ID='$b'";
     $a2 = oci_parse($con, $query2); 
     $r2 = oci_execute($a2);
	 
	 
	 
     while($row = oci_fetch_array($a2, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			$arn=$row[0];
			$mId=$row[1];
			$cons=$row[2];
			$orig=$row[3];
			$dest=$row[4];
//			
			$Booking_Date=$row[5];
            echo "<br><br>";
		  }
	     $query3="select TrackNo,status,Cdate from Tracking_history where mail_ID='$b' Order by TrackNo";
     $a3 = oci_parse($con, $query3); 
     $r3 = oci_execute($a3);
	 
	      while($row1 = oci_fetch_array($a3, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			
			$status=$row1[1];
			$DDate=$row1[2];
		  }
 
	 $query4="select Fname from staff where staffID='$arn'";
     $a4 = oci_parse($con, $query4); 
     $r4 = oci_execute($a4);
	 
	      while($row4 = oci_fetch_array($a4, OCI_BOTH+OCI_RETURN_NULLS))  //parse or execute for update, insert
      	  {
			
			$signedby=$row4[0];
		  }

                  
?>
	<h1 align = "left" style = "color:black;font-family:times new roman;background-color:grey">Tracking Result(s)</h1>
	<p style = "color:red">Tracking Number: <?php echo $_POST['track_no'];?></p>
	<form>
		<table>
			<tr>
				<th><b>Shipment Details:</b></th>
				<td colspan = "100000"></td><td colspan = "100000"></td><td colspan = "100000"></td><td colspan = "100000"></td><td colspan = "100000"></td><td colspan = "100000"></td><td colspan = "100000"></td><td colspan = "100000"></td>
				<td>
					<table border = "1">
						<tr>
							<th style = "background-color:grey"><b>Shipment Tracking Summary:</b></th>
						</tr>
						<tr>
							
							<td><?php echo"Current Status: " ;echo $status; 
									  echo "</br>"; 
									  echo "Delievered On: " ;echo $DDate; 
									  echo"</br>"; 
									  echo"Signed By: " ; echo $signedby;
									  echo"</br>";
    							  ?></td>
							
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>ARN:<?php echo $arn;?></td>
			</tr>
			<tr>
				<td>Origin:<?php echo $orig;?></td>
			</tr>
			<tr>
				<td>Destination: <?php echo $dest;?></td>
			</tr>
			<tr>
				<td>Booking Date: <?php echo $Booking_Date;?></td>
			</tr>
			<tr>
				<td>Shipper: <?php echo "Ali Express"; ?></td>
			</tr>
			<tr>
				<td>Consignee: <?php echo $cons; ?></td>
			</tr>
			<th><b>Track History:</b></th></tr><tr>
		</table>
		<br><br>
			
			<?php echo " <br><br>";
			 $query="select Cdate,Ctime,status,Location from Tracking_history where mail_ID='$b' ORDER BY Cdate desc, Ctime desc";
     $a = oci_parse($con, $query); 
     $r = oci_execute($a);
                ?>
               <table border="true" width="80%" align="center">
			<tr>
				<td width = "150">Date :</td>
				<td width = "150">Time :</td>
				<td width = "150">Status :</td>
				<td width = "150">Location :</td>
			</tr>
                  <?php
				  
                       while($row = oci_fetch_array($a, OCI_BOTH+OCI_RETURN_NULLS))  
                            {
                  ?>
                    <tr>
                        <td width = "150"><?php echo $row[0];?></td>    
                        <td width = "150"><?php echo $row[1]."  ";?></td>
                        <td width = "150"><?php echo $row[2]."  ";?></td>
                       
                        <td width = "150"><?php echo $row[3]."  ";?></td>
                        
                     </tr>      
                      <?php  } ?>
 

             </table> 
		
	</form>
</body>
</html>

