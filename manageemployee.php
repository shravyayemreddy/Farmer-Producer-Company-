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
$sql = "select * from employee";
$result = $dbconnection->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$str = $row["phone"];
	//echo htmlentities($str);

echo "<tr>
    <td><b> Name:</b>" . $row['name'] . "</td><br> 
                <td><b> Position: </b>" . $row['department'] . "</td><br>
		<td><b> Salary: </b>" . $row['salary'] . "</td><br>
                <td> <b>Phoneno: </b>" . $row['phone'] . "</td><br>
	<td>
		<a href='.\updateemployee.php'>Update</a>
				</td><br>
	
               
                
	

		</td><br>
 <br>
</tr>"; 
        
 }
}


$dbconnection->close();
?>
</body>
 </html> 