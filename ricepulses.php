<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Rice and pulses">
  <meta name="keywords" content="Indiagate Rice,Kameshwari Premium,Kirpa Rice,Maharani Rice,Nawab Rice,Goya Chick Peas,Soyabean,Blackeyed Peas,Marrowfat peas,Mixwhole Pulses">
  <meta name="author" content="Kaustubh Nehete">
<title>Rice and Pulses</title>
<script type="text/javascript">
function submitit()
{
document.forms['c3'].action='insert_txtdb.php'
document.forms['c3'].target='iframe_hide'
document.forms['c3'].submit()
alert("Products added to cart !");
return true;
}
function notadded()
{
if(document.forms['c3'].checkbox=true)
{
var r=confirm("Products may NOT be ADDED to cart !!\nPlease click OK to add them or CANCEL to go back without adding !");
if(r==true)
submitit();
}
}
</script>
</head>
<body bgcolor="#FEFFB8" link="black">
<i style="font-size:22;font-family:Arial">Category: Rice and Pulses</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/indiagate.png" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Indiagate rice">Indiagate rice<br>Price: 90 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/kameshwari-premium.png" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Kameshwari premium">Kameshwari premium<br>Price: 90 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/kirpa-sagar-gold-premium.png" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Kirpa rice">Kirpa rice<br>Price: 80 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/brand_maharani_large.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Maharani rice">Maharani rice<br>Price: 75 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/nawab.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Nawab rice">Nawab rice<br>Price: 85 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/GOYA CHICK PEAS.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Goya Chick Peas">Goya Chick Peas<br>Price: 20 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/soyabean.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Soyabean">Soyabean<br>Price: 50 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/blackeye-peas.png" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Blackeyed peas">Blackeyed peas<br>Price: 20 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/Marrowfat Processed Peas.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Marrowfat Peas">Marrowfat Peas<br>Price: 30 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/mixwhole.jpg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Mixwhole pulses">Mixwhole pulses<br>Price: 20 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
