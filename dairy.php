<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Dairy Products">
  <meta name="keywords" content="Amul Milk,Amul mithai-mate,Amul cheese,Amul kool,Amul butter,Amul dahi,Danone slim milk,Amul ghee,Gopi yogurt,Amul shrikhand">
  <meta name=" author" content="Kaustubh Nehete">
<title>Dairy Products</title>
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
<i style="font-size:22;font-family:Arial">Category: Dairy Products</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Amul milk.jpg" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Amul milk">Amul milk<br>Price: 22 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/Amul Mithai Mate.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Amul mithai-mate">Amul mithai-mate<br>Price: 90 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/amul-cheese-slices.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Amul cheese">Amul cheese<br>Price: 35 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/amul-kool.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Amul kool">Amul kool<br>Price: 20 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/butter.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Amul butter">Amul butter<br>Price: 20 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/dahi.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Amul dahi">Amul dahi<br>Price: 30 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/danone-slim-milk-skimmed.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Danone slim milk">Danone slim milk<br>Price: 25 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/ghee.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Amul Ghee">Amul Ghee<br>Price: 85 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/GOPI-yogurt-wholemilk.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Gopi yogurt">Gopi yogurt<br>Price: 25 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/shrikhand.jpg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Amul shrikhand">Amul shrikhand<br>Price: 40 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
