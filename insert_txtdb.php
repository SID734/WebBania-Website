<?php
if(isset($_POST['chkb1'],$_POST['qty1']))
{
$name1=$_POST['chkb1'];
$name2=$_POST['qty1'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name1."           =      ");
fwrite($handle,$name2.";
");

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) 
VALUES (1, '3D Camera', '3DcAM01', 'photos/patanjalinoodles.jpeg', 1500.00)


}
if(isset($_POST['chkb2'],$_POST['qty2']))
{
$name3=$_POST['chkb2'];
$name4=$_POST['qty2'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name3."            =      ");
fwrite($handle,$name4.";
");
}
if(isset($_POST['chkb3'],$_POST['qty3']))
{
$name5=$_POST['chkb3'];
$name6=$_POST['qty3'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name5."          =      ");
fwrite($handle,$name6.";
");
}
if(isset($_POST['chkb4'],$_POST['qty4']))
{
$name7=$_POST['chkb4'];
$name8=$_POST['qty4'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name7."              =      ");
fwrite($handle,$name8.";
");
}
if(isset($_POST['chkb5'],$_POST['qty5']))
{
$name9=$_POST['chkb5'];
$name10=$_POST['qty5'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name9."             =      ");
fwrite($handle,$name10.";
");
}
if(isset($_POST['chkb6'],$_POST['qty6']))
{
$name11=$_POST['chkb6'];
$name12=$_POST['qty6'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name11."           =      ");
fwrite($handle,$name12.";
");
}
if(isset($_POST['chkb7'],$_POST['qty7']))
{
$name13=$_POST['chkb7'];
$name14=$_POST['qty7'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name13."             =      ");
fwrite($handle,$name14.";
");
}
if(isset($_POST['chkb8'],$_POST['qty8']))
{
$name15=$_POST['chkb8'];
$name16=$_POST['qty8'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name15."            =      ");
fwrite($handle,$name16.";
");
}
if(isset($_POST['chkb9'],$_POST['qty9']))
{
$name17=$_POST['chkb9'];
$name18=$_POST['qty9'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name17."           =      ");
fwrite($handle,$name18.";
");
}
if(isset($_POST['chkb10'],$_POST['qty10']))
{
$name19=$_POST['chkb10'];
$name20=$_POST['qty10'];
$handle=fopen('ajax_info.txt','a');
fwrite($handle,$name19."            =      ");
fwrite($handle,$name20.";
");
fclose($handle);
}
?>