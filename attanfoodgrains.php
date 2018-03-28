<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Atta and Foodgrains">
  <meta name="keywords" content="Samrat Atta,Aashirvaad Atta,Pillsbury Atta,Shakti Bhog Atta,White beans,Nutricea barley,Millets,Sweet corn,Roasted gram,Whole green lentils">
  <meta name="author" content="Kaustubh Nehete">
<title>Atta and Foodgrains</title>
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
<i style="font-size:22;font-family:Arial">Category: Atta and Foodgrains</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/samrat_atta.jpeg" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Samrat Atta">Samrat Atta<br>Price: 30 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/aashirvaad_atta.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Aashirvaad Atta">Aashirvaad Atta<br>Price: 20 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/pillsbury-chakki-fresh-atta.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Pillsbury Atta">Pillsbury Atta<br>Price: 20 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/Shakti-Bhog-Atta.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Shakti Bhog Atta">Shakti Bhog Atta<br>Price: 20 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/Can-White.png" height="150" width="180"><br><input type="checkbox" name="chkb5" value="White beans">White beans<br>Price: 15 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Nutricea integral puffed barley.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Nutricea barley">Nutricea barley<br>Price: 50 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/millet.jpeg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Millets">Millets<br>Price: 45 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/sweet corn.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Sweet corn">Sweet corn<br>Price: 20 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/roasted-gram.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Roasted gram">Roasted gram<br>Price: 25 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/Whole green lentils.jpg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Whole green lentils">Whole green lentils<br>Price: 30 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
