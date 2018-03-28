<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Snacks and Beverages">
  <meta name="keywords" content="Patanjali Noodles,Kurkure,Hide and Seek,Marie biscuits,Snacky biscuits,Bourbon biscuits,patanjali juice,Coca cola can,Fanta can, Frooti can">
  <meta name="author" content="Kaustubh Nehete">
<title>Snacks and Beverages</title>
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
<i style="font-size:22;font-family:Arial">Category: Snacks and Beverages</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/patanjalinoodles.jpeg" height="150" width="180"><br><input type="checkbox" name="chkb1" value="P.Noodles ">Patanjali Noodles<br>Price: 10 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/kurkure.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Kurkure   ">Kurkure<br>Price: 20 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/hidenseek.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Hide&seek ">Hide & Seek<br>Price: 20 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/marie.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Marie     ">Marie biscuits<br>Price: 15 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/snacky.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Snacky    ">Snacky biscuits<br>Price: 15 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/bourbon.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Bourbon   ">Bourbon biscuits<br>Price: 20 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/patanjalijuice.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="P.Juice   ">Patanjali Juice<br>Price: 5 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/cola.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Cola cola ">Coca Cola can<br>Price: 20 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/fanta.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Fanta can ">Fanta can<br>Price: 20 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/frooti1.png" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Frooti can">Frooti can<br>Price: 10 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
