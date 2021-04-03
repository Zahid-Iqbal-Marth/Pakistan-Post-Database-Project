<html>
	<head> <title>Registration</title> </head>
    <style type="text/css">
	.bajwa
	{
		margin-left: 15px;
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
			<a href="home.php">Home</a>
			<a href="TrackingNo.php">Track Mail</a>
		</div>
		<h1 align="center">Login</h1>

		
   <table align="center" >
     <form name="login" action="login.php" method="post">
     
       
      <tr>
       <td><label>Staff_ID</label></td>
       <td><input type="text" name="staffID" value=""></td> 
     </tr> 
	 
     <tr>
       <td><label>password</label></td>
       <td><input type="password" name="Password" value=""></td> 
     </tr> 
	 
     <tr>
       <td></td> 
       <td><input type="submit" value="Login"></td>
     </tr> 
	 
    </form> 
					
	</body>
</html>