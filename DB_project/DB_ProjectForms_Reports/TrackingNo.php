<html>
<head><title>Tracking Report</title></head>
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
	<form method = "POST" action = "TrackingReport1.php">  <!--action = "TrackingReport.php"--> 
		<label style = "font-size:17">Tracking Number:</label></br>
		<textarea name = "track_no" rows = "5"></textarea></br></br>
		<input style = "background-color:red;color:white;font-size:15" type = "submit" value = "Track" />
	</form>
	<?php
		//$trackNo = $_POST['track_no'];
		/*$db_sid="(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.10.7)(PORT = 1521) ) (CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = Ali2)))";
		$db_user = "scott";
		$db_pass = "tiger";
		$cid = $_POST['custid'];
		$con = oci_connect($db_user,$db_pass,$db_sid);
		$sql_select = "SELECT * FROM CUSTOMER WHERE custID = ".$cid;
		$query_id = oci_parse($con, $sql_select);
		$runselect = oci_execute($query_id);*/
		/* run the queries here..*/
	?>

</body>
</html>