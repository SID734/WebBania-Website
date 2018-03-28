<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Body and Skin Care">
  <meta name="keywords" content="Olay lotion,Dettol handwash,Himalaya facewash,Nivea Body Lotion,Nivea sun-cream,Nivea cream,Patanjali facecream,Patanjali facewash,Ponds facewash,Vaseline jelly">
  <meta name="author" content="Kaustubh Nehete">
<title>Body and Skin Care</title>
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
<i style="font-size:22;font-family:Arial">Category: Body and Skin Care</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Body_SilkyBerryLotion.jpg" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Olay lotion">Olay lotion<br>Price: 90 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/dettolhandwash.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Dettol handwash">Dettol handwash<br>Price: 50 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/himalaya neem facewash.jpg" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Himalaya facewash">Himalaya facewash<br>Price: 45 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/Nivea Rich Nourishing Body Lotion.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Nivea Body Lotion">Nivea Body Lotion<br>Price: 99 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/nivea sun protect.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Nivea sun-cream">Nivea sun-cream<br>Price: 70 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/nivea-cream.jpg" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Nivea cream">Nivea cream<br>Price: 45 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/Patanjali-Beauty.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Patanjali facecream">Patanjali facecream<br>Price: 55 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/patanjali-neem-tulsi-face-wash.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Patanjali facewash">Patanjali facewash<br>Price: 60 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/ponds menz pollution out deep clean facewash.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Ponds facewash">Ponds facewash<br>Price: 70 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/Vaseline Jelly Original.png" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Vaseline jelly">Vaseline jelly<br>Price: 20 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
