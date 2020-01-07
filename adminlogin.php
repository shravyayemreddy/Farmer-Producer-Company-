
<?php include('server.php')
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Farmer Producer Company</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>


</style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>

  </div>
	 
  <form method="post" action="adminlogin.php">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_admin">Login</button>
  	</div>
  	<p>
  	  <p>
  		Not yet a member? <a href="adminregister.php">Sign up</a> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp   <a href="welcome.php">Home</a>
  	</p>
  	</p>

  </form>
</body>
</html>