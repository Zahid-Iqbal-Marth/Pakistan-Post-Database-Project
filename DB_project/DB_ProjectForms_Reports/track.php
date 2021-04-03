<html>
	<head> <title>Registration</title> </head>
    <style type="text/css">
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
			<a href="home.php">Home</a>
			<a href="send.php">Send Mail</a>
			<a class="active" href="track.php">Track Mail</a>
			<a href="modify.php">Modify</a>
		</div>
		<h1 align="center">Tracking Record</h1>

		<table align="center" >
		<form name="reg" action="insert.php" method="post">

			<tr>
				<td><label>Track id</label></td>
				<td><input type="text" name="Staff id" value="" required></td> 
			</tr>			  
			<tr>
				<td></td> 
				<td><input type="submit"  ></td>
			</tr> 
			
		</form> 
	</body>
</html>