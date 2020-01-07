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
<h2>Post Jobs</h2>
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
?>

<form method="post" action="postjobs.php">
  <tr>	
  	<td>
  	  <label>Job Name:</label>
  	  <input type="text" name="name">
  	</td>
<br>
<br>
  	<td>
  	  <label>Department:</label>
  	  <input type="name" name="name">
  	</td>
<br>
<br>
  	<td>
  	  <label>Description:</label>
  	  <input type="description" name="description">
  	</td>
<br>
<br>
  	<td>
  	  <label>salary:</label>
  	  <input type="salary" name="salary">
  	</td>
<br>
<br>
  	  <button type="submit" class="btn" name="post_jobs">Post Jobs</button>
  	</div>
  	</tr>
  </form>
</body>
</html>