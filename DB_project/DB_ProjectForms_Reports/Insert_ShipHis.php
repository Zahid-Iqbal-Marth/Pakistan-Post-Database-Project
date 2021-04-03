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
	<form name="reg" action="InsertShipHistory.php" method="post">

	<h1 align = "center">Insert Shipment Details</h1>
	<table>
		<tr>
			<td width = "150">ARN: </td>
			<td><input type="text" name="ARN" required> </td>
			<td width = "150">Mail ID:</td>
			<td><input type = "text" name = "MailID" required></td>
			<td width = "150">Origin: </td>
			<td><input type = "text" name = "Origin" required></td>
		</tr>
		<tr>
			<td width = "150">Destination:</td>
			<td> <input = "text" name = "dest" required></td>
			<td width = "150">consignee:</td>
			<td><input = "text" name = "con" required></td>
			<td width = "150">Booking_Date:</td>
			<td><input = "text" name = "Booking_Date" placeholder = "YYYY-MM-DD" required></td>
		</tr>
		<tr>
			<td><input type= "submit" value = "Insert"></input></td>
		</tr>
	</table>
	</form>

	</body>
</html>