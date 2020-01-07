<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: adminlogin.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Farmer Producer Company</title>
	
</head>
<body>

<div class="header">
	
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
   
</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>
<body class="container">
	<h1 class="text-center text-danger mb-5" 
	style="font-family: 'Abril Fatface', cursive;"> Farmer Producer Company</h1>
 <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p align="right"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

 <h3><a href="manageemployee.php"> Manage Employee Information</a></h3><br>
<br>
<h3><a href="managefarmer.php">Manage Farmer Information</a></h3>
<br>
<br>
<h3> <a href="updateproduct.php">Add Products</a></h3>
<br>
<br>
<h3> <a href="postjobs.php">Post Job</a></h3>
</body>
</html>