<?php

$user = 'root';
	$pass = "";
	$database = "sample_db";
	$host = 'localhost';
	
	$con = mysqli_connect($host , $user , $pass , $database);

if(mysqli_connect_errno())
{
echo"error in connecting to database:".mysqli_connect_error();
}

$sql = "INSERT INTO Customer(Firstname,Middlename,Lastname,Address,Contactno,Email) VALUES('$_POST[fname]','$_POST[mname]','$_POST[sname]','$_POST[address]','$_POST[contactno]','$_POST[email]')";

mysqli_query($con,$sql);

if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));
}

mysqli_close($con);
?>


<html>
<head><title>Payment Details</title>
<style>
h2{color:red;}
h4{color:blue;}
</style>
</head>
<body>
<iframe name="one" src="one.html" height="580" width="200"></iframe>
<iframe name="two" src="nb.html" height="580" width="930"></iframe>
</frameset>
<body>
</html>