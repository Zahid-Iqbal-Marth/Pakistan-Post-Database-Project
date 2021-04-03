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
	<form name="reg" action="Insert.php" method="post">

	<h1 align = "center">PPost Customer Transactions</h1>
	<table>
		<tr>
			<td width = "150">Customer First Name: </td>
			<td><input type="text" name="CFName" > </td>
			<td width = "150">Customer Last Name:</td>
			<td><input type = "text" name = "CLName"></td>
			<td width = "150">Customer ID: </td>
			<td><input type = "text" name = "Cid"></td>
		</tr>
		<tr>
			<td width = "150">Street:</td>
			<td> <input = "text" name = "street"></td>
			<td width = "150">Sector:</td>
			<td><input = "text" name = "sector"></td>
			<td width = "150">City:</td>
			<td><input = "text" name = "city"></td>
		</tr>
		<tr>
			<td width = "150">Mobile#</td>
			<td><input = "text" name = "mobile_no"></td>
			<td width = "150">CNIC:</td>
			<td><input = "text" name = "CNIC"></td>
		</tr>
	</table>
	<hr>
	<?php echo "</br>"?>
	<h2 align = "center">Parcel Information</h2>
	<table>
		<tr>
			<td width  = "150">Tracking/Parcel No:</td>
			<td><input = "text" name = "Track_id"></td>
			<td width = "150">Description:</td>
			<td><input = "text" name = "desc"></td>
			<td width = "150">Qty:</td>
			<td><input = "text" name = "quantity"></td>
			<td width = "150">Status:</td>
			<td><input = "text" name = "status"></td>
			<td width = "150">Date:</td>
			<td><input = "text" name = "date"></td>
			<td width = "150">Fee:</td>
			<td><input = "text" name = "fee"></td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td width = "150">Receipent First Name</td>
			<td><input = "text" name = "recFname"></td>
			<td width = "150">Receipent Last Name:</td>
			<td><input = "text" name = "recLname"></td>
			<td width = "150">Receipent_ID:</td>
			<td><input = "text" name = "recID"></td>
			<td width = "150">RStreet:</td>
			<td><input = "text" name = "rec_St"></td>
			<td width = "150">RSector:</td>
			<td><input = "text" name = "rec_Sc"></td>
			<td width = "150">RCity:</td>
			<td><input = "text" name = "city"></td>

		</tr>
		</tr><tr></tr><tr>
		<td><input type="submit", value="Enter"></input></td>
	
	</table>
	</form>

	</body>
</html>