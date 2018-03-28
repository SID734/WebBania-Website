<?php

error_reporting(0);

$con=mysqli_connect("localhost","root","","sample_db");

if(mysqli_connect_errno())
{
echo"error in connecting to database:".mysqli_connect_error();
}

$sql="INSERT INTO Customer(Firstname,Middlename,Lastname,Address,Contactno,Email)
VALUES
('$_POST[fname]','$_POST[mname]','$_POST[sname]','$_POST[address]','$_POST[contactno]','$_POST[email]')";

mysql_select_db('sample_db');
$retval=mysql_query($sql,$con);

if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));
}

if(isset($_POST['contactno']))
{
$name1=$_POST['contactno'];
$handle=fopen('products.txt','a');
fwrite($handle,$name1." = Customer contactno.");
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