<?php
if(isset($_POST['chkb1'],$_POST['qty1']))
{
$name1=$_POST['chkb1'];
$name2=$_POST['qty1'];
$handle=fopen('products.txt','a');
fwrite($handle,$name1."           =      ");
fwrite($handle,$name2.";
");
}
if(isset($_POST['chkb2'],$_POST['qty2']))
{
$name3=$_POST['chkb2'];
$name4=$_POST['qty2'];
$handle=fopen('products.txt','a');
fwrite($handle,$name3."            =      ");
fwrite($handle,$name4.";
");
}
if(isset($_POST['chkb3'],$_POST['qty3']))
{
$name5=$_POST['chkb3'];
$name6=$_POST['qty3'];
$handle=fopen('products.txt','a');
fwrite($handle,$name5."          =      ");
fwrite($handle,$name6.";
");
}
if(isset($_POST['chkb4'],$_POST['qty4']))
{
$name7=$_POST['chkb4'];
$name8=$_POST['qty4'];
$handle=fopen('products.txt','a');
fwrite($handle,$name7."              =      ");
fwrite($handle,$name8.";
");
}
if(isset($_POST['chkb5'],$_POST['qty5']))
{
$name9=$_POST['chkb5'];
$name10=$_POST['qty5'];
$handle=fopen('products.txt','a');
fwrite($handle,$name9."             =      ");
fwrite($handle,$name10.";
");
}
if(isset($_POST['chkb6'],$_POST['qty6']))
{
$name11=$_POST['chkb6'];
$name12=$_POST['qty6'];
$handle=fopen('products.txt','a');
fwrite($handle,$name11."           =      ");
fwrite($handle,$name12.";
");
}
if(isset($_POST['chkb7'],$_POST['qty7']))
{
$name13=$_POST['chkb7'];
$name14=$_POST['qty7'];
$handle=fopen('products.txt','a');
fwrite($handle,$name13."             =      ");
fwrite($handle,$name14.";
");
}
if(isset($_POST['chkb8'],$_POST['qty8']))
{
$name15=$_POST['chkb8'];
$name16=$_POST['qty8'];
$handle=fopen('products.txt','a');
fwrite($handle,$name15."            =      ");
fwrite($handle,$name16.";
");
}
if(isset($_POST['chkb9'],$_POST['qty9']))
{
$name17=$_POST['chkb9'];
$name18=$_POST['qty9'];
$handle=fopen('products.txt','a');
fwrite($handle,$name17."           =      ");
fwrite($handle,$name18.";
");
}
if(isset($_POST['chkb10'],$_POST['qty10']))
{
$name19=$_POST['chkb10'];
$name20=$_POST['qty10'];
$handle=fopen('products.txt','a');
fwrite($handle,$name19."            =      ");
fwrite($handle,$name20.";
");
fclose($handle);
}
?>

<html>
<head><title>Shipping address</title>
</head>
<body bgcolor="lightyellow">
&nbsp;&nbsp;&nbsp;
<font size="5%" color="red"><b><u><i>Shipping Details:</i></u></b></font>
<br><br>
<font size="3%" color="chrome"><b>*</b>Fill below fields appropriately.</font>
<br><br>
<form action="insert_todb.php" method="post">
<fieldset>
<h3><u>Name:</u></h3>
<table>
<tr><th>First name</th><th>Middle Name</th><th>Last name</th></tr>
<tr><td><input type="text" name="fname"></td><td>&nbsp;&nbsp;<input type="text" name="mname"></td><td>&nbsp;&nbsp;<input type="text" name="sname"></td></tr>
</table>
<img src="" border="1" style="position:absolute;top:100;left:620;height:390;width:2">
<h3 style="position:absolute;top:95;left:660">Your selected products are:</h3>
<iframe src="read_txtdb.php" height="270" width="450" style="position:absolute;top:150;left:655"></iframe>
<h3><u>Address:</u></h3>
<textarea rows="3" cols="73" name="address"></textarea>
<br><br>
<table>
<tr>
<td><h3><u>Contact No.</u></h3>
<input type="text" name="contactno">
</td>
<td>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>E-mail Id:</u></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email">
</td>
</tr>
<tr><td><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" style="background-color:lightgreen;font-size:18;width:110;height:47"><u>Confirm<br>Details</u></button>
</td><td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" style="background-color:lightgreen;font-size:19;width:110;height:47"><u>Reset</u></button></td></tr></table>
</fieldset>
<br>
<br>
<br>
<font size="5"><i>&nbsp;&nbsp;~Delivery is expected within 24 hours.</i></font>
<hr color="red" size="3">
</form>
</body>
</html>
