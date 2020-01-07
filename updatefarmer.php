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
if (isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$produce =$_POST['produce'];
$quantity =$_POST['quantity'];
$phone=$_POST['phone'];

  $sql = "UPDATE farmer ". "SET name = $name , Produce=$produce, quantity=$quantity  phone=$phone ". 
               "WHERE id = $id";
$result = $dbconnection->query($sql);
if(! $result ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            
$dbconnection->close();
}
else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     
                     <tr>
                        <td width = "100">Farmer Name</td>
                        <td><input name = "name" type = "text" 
                           id = "name"></td>
                     </tr>
		<tr>
                        <td width = "100">Produce</td>
                        <td><input name = "name" type = "text" 
                           id = "produce"></td>
                     </tr>
<tr>
                        <td width = "100">quantity</td>
                        <td><input name = "name" type = "text" 
                           id = "quantity"></td>
                     </tr>
			<tr>
                        <td width = "100"> phoneno</td>
                        <td><input name = "name" type = "text" 
                           id = "phone"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
