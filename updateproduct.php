<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.rightcolumn {   
    float:right;
    width: 100%;
}
.right {
    text-align: right;
    float: right;
}
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

  <h1 align="center">Farmer Producer company</h1>
</div>
  
<div class= "left">
<h2>Manage employee information</h2>
</div>

</div>
<div class= "right">
<a href= "adminindex.php" >My Account</a> 


</div>


<?php
$dbconnection = mysqli_connect("localhost", "root", "","project");
                if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
                }
if (isset($_POST['update_product']))
{

$name=$_POST['name'];
$price=$_POST['price'];
$per=$_POST['per'];

$sql = "INSERT INTO products (name, price, per) VALUES ($name,$price, $per)";

$result = $dbconnection->query($sql);
}
?>

<form method="post" action="updateproduct.php">
  	
  	<div class="input-group">
  	  <label>Name:</label>
  	  <input type="text" name="name"><br>
  	</div>
<br>
  	<div class="input-group">
  	  
  	<div class="input-group">
  	  <label>Price:</label>
  	  <input type="price" name="price"><br>
  	</div>
<br>
	<div class="input-group">
  	  <label>per:</label>
  	  <input type="per" name="per"><br>
  	</div>
  <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="update_product">Add products</button>
  	</div>
  	
  </form>
</body>
</html>

