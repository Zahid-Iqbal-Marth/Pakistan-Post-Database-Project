<html>
	<head> <title>Registration</title> </head>
    <style type="text/css">
	.bajwa
	{
		margin-right: 50px;
	}
    td
    {
      padding:5px;  
    }
	
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
	.Cell { height:25px; widt25px; }
	</style>
	<body>
		<div>
			<img src = "logo.jpg"  width="100%" height="35%">
		</div>
		<div class="topnav">
				<a class="active" href="staffHome.php">Home</a>
				<a href="reg.php">Send Mail</a>
				<a href="Cal_Send_Collections.php">Cal and Send collections</a>
				<a href="Insert_TrackHis.php">Insert Tracking History</a>
				<a href="Insert_ShipHis.php">Insert Shipment Details</a>
				<a href="ReportHome.php">View Reports</a>
		</div>
	<form name="Insert" action="Cal_Send_CollectionsQuery.php" method="post">

	<h1 align = "center">Calculate And Send Collections</h1>
	<table>
		<tr>
			<td width = "150">Branch ID: </td>
			<td><input type="text" name="B_ID" required> </td>
			<td width = "150">Year:</td>
			<td><input type = "text" name = "y" required></td>
		</tr>
		<tr>
			<td width = "150">Month: </td>
			<td><input type = "text" name = "m" required></td>
			<td width = "150">Day:</td>
			<td> <input = "text" name = "d" required</td>
			<td width = "150">Full Date:</td>
			<td> <input = "text" name = "date" required</td>
		</tr>
		<tr>
			<td ><input type="Submit" value = "Submit"></td>
		</tr>
	</table>
	</form>

	</body>
</html>