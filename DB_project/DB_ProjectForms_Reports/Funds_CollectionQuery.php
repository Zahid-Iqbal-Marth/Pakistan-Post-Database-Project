<html>
<head><title>Funds Collection</title></head>
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
				<a href="Funds_Collection.php">Branch Yearly Funds Collections</a>
				<a href="TrackingNo.php">Track Mail</a>
			</div>
	<form >
	<h1 align = "center">PPost Branch Yearly Funds Collections</h1>
   <?php
     $db_user = "ZAWF"; 
     $db_pass = "tiger";
      $con = oci_connect($db_user,$db_pass); 
	  $y=$_POST['year'];
      $b=$_POST['branchNo'];
     $query="select SUM(NoOfCol),m,SUM(amCollected),SUM(amReturned) 
			FROM collections
			WHERE y='$y' AND branchID='$b'
			Group by m";
     $a = oci_parse($con, $query); 
     $r = oci_execute($a);

                ?>
               <table border="true" width="80%" align="center">
			<tr>
				<td width = "150">NoOfCollections :</td>
				<td width = "150">Month :</td>
				<td width = "150">AmountCollected :</td>
				<td width = "150">AmountReturned :</td>
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

                  
  </body>
</html>