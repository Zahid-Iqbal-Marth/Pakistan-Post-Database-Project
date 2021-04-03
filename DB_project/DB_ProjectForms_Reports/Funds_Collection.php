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
	<form name="funds" action="Funds_CollectionQuery.php" method="post">
	<h1 align = "center">PPost Branch Yearly Funds Collections</h1>
	<table border = "2">
		<tr>
			<td width = "100">Year: </td>
			<td><input = "text" name = "year" required></td>
		</tr>
		<tr>
		</tr>
		<?php echo"</br>"?>
		<tr>
			<td width = "100">Branch#:</td>
			<td><input = "text" name = "branchNo" required></td>
			<td width = "50"></td>
			<td width = "100">Name:</td>
			<td><input = "text" name = "bName"></td>
		</tr>
		<tr>
		</tr>
		<?php echo"</br>"?>
		<tr>
			<td width = "100">Manager Name:</td>
			<td><input = "text" name = "Mname"></td>
		</tr>
		<?php echo"</br>"?>
		<tr>
			<td><input type= "submit" name = "Check"></td>
		</tr>
	</table>
	</form>
	<hr>
</body>
</html>