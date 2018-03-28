<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Soaps and Detergents">
  <meta name="keywords" content="Wheel Detergent,Dettol Soap,Dove Soap,Downy detergent,Lifebuoy soap,Patanjali Shampoo,Patanjali Soap,Tide liquid,Vim gel,Henko detergent">
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
<i style="font-size:22;font-family:Arial">Category: Soaps and Detergents</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Wheel.jpg" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Wheel Detergent">Wheel Detergent<br>Price: 10 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/dettol.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Dettol soap">Dettol soap<br>Price: 20 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/dove-soap.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Dove soap">Dove soap<br>Price: 20 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/downy.jpeg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Downy detergent">Downy detergent<br>Price: 50 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/lifebuoy-soap-total.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Lifebuoy soap">Lifebuoy soap<br>Price: 50 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Patanjali Kesh Kanti Anti-Dandruff Hair Cleanser.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Patanjali Shampoo">Patanjali Shampoo<br>Price: 10 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/patanjali_kanti_alovera_soap.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Patanjali Soap">Patanjali Soap<br>Price: 15 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/Tide-Liquid-Detergent.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Tide liquid">Tide liquid<br>Price: 20 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/Vim_Powder.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Vim gel">Vim gel<br>Price: 30 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/hemko-detergent-powder.jpg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Henko detergent">Henko detergent<br>Price: 20 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
