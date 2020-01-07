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

</div>

</div>
<div class= "right">
<a href= "index.php" >My Account</a> 


</div>


<?php
$dbconnection = mysqli_connect("localhost", "root", "","project");
                if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
                } ?>

<h5> Sucessfully placed order<h5>
</body>
</html>