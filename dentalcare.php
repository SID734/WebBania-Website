<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Dental Care Products">
  <meta name="keywords" content="Colgate toothbrush,Colgate toothpaste,Colgate mouthwash,Listerine freshburst,Oral-B Pro 500,oral-B Toothbrush,Patanjali toothpaste,Patanjali toothbrush,Sensodyne Repair,Toothbrush Kids">
  <meta name="author" content="Kaustubh Nehete">
<title>Dental Care</title>
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
<i style="font-size:22;font-family:Arial">Category: Dental Care</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/colgate toothbrush.png" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Colgate toothbrush">Colgate toothbrush<br>Price: 10 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/colgateDentalCream.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Colgate toothpaste">Colgate toothpaste<br>Price: 40 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/Colgatemouthwash.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Colgate mouthwash">Colgate mouthwash<br>Price: 60 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/listerine_freshburst.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Listerine freshburst">Listerine freshburst<br>Price: 90 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/Oral-B Pro 500 Electric Toothbrush.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Oral-B Pro 500">Oral-B Pro 500<br>Price: 99 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Oralb3DWhiteVividToothbrush.png" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Oral-b Toothbrush">Oral-b Toothbrush<br>Price: 25 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/Patanjali Dant Kanti Dental Cream - 200 g.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Patanjali toothpaste">Patanjali toothpaste<br>Price: 75 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/Patanjali-Sensitive-Ultra-Soft-Bristles-Toothbrush.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Patanjali toothbrush">Patanjali toothbrush<br>Price: 20 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/Sensodyne-REPAIR.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Sensodyne Repair">Sensodyne Repair<br>Price: 95 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/Toothbrush Kids.jpeg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Toothbrush Kids">Toothbrush Kids<br>Price: 15 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
