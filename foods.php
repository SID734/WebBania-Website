<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Food Products">
  <meta name="keywords" content="Wheat bread,Brown bread,Corn flakes,Chilli Pickle,Mango Pickle,Kabliwala Kaju,Kissan Fruit Jam,Maggi Sauce,Mango Fruit Jam,Patanjali Jam">
  <meta name="author" content="Kaustubh Nehete">
<title>Food Products</title>
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
<i style="font-size:22;font-family:Arial">Category: Food Products</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/britannia-whole-wheat-bread.png" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Wheat bread">Wheat bread<br>Price: 35 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/brown bread.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Brown bread">Brown bread<br>Price: 40 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/corn flakes.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Corn flakes">Corn flakes<br>Price: 50 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/Green_Chilli_Pickle.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Chilli Pickle">Chilli Pickle<br>Price: 40 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/Indian-Pickles.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Mango Pickle">Mango Pickle<br>Price: 35 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Kabliwala-s-Kaju-Gold.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Kabliwala Kaju">Kabliwala Kaju<br>Price: 99 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/Kissan-Fruit-Jam.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Kissan Fruit Jam">Kissan Fruit Jam<br>Price: 40 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/Maggi-Hot-and-Sweet-Tomato-Chilli-Sauce.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Maggi Sauce">Maggi Sauce<br>Price: 70 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/Mango-fruit-jam.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Mango fruit jam">Mango fruit jam<br>Price: 45 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/Patanjali-Mixed-Fruits-Jam.jpg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Patanjali jam">Patanjali jam<br>Price: 35 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
