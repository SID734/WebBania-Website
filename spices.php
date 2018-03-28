<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Spices">
  <meta name="keywords" content="Pulav Masala,Catch Masala,Chhole Masala,Pav-Bhaji Masala,Sabji Masala,Garam Masala,Chana Masala,Chat Masala,Samhar Masala,Palakpaneer Masala">
  <meta name="author" content="Kaustubh Nehete">
<title>Spices</title>
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
<i style="font-size:22;font-family:Arial">Category: Spices</i>
<hr size="3" color="red">
<form name="c3" method="post" action="Shipping.php">
<pre style="font-size:22;font-family:Arial">Select <input type="checkbox" checked> your desired products:                                                                        <iframe name="iframe_hide" style="display:none"></iframe><button style="background-color:lightgreen;font-size:18"><a href="iframepage.html" OnClick="notadded()">Switch Category</a></button>      <button type="submit" style="background-color:lightgreen;font-size:18"><u>Go to payments-></u></button></pre>
<table border="3" bordercolor="red" cellspacing="10" cellpadding="10" style="background:#EDDDBB">
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/biriyani-pulav-masala.jpg" height="150" width="180"><br><input type="checkbox" name="chkb1" value="Pulav Masala">Pulav Masala<br>Price: 10 Quantity:<input type="text" name="qty1" style="height:19;width:18"></th>
<th><img src="photos/Catch Masala - Magic Chat.jpg" height="150" width="180"><br><input type="checkbox" name="chkb2" value="Catch Masala">Catch Masala<br>Price: 20 Quantity:<input type="text" name="qty2" style="height:19;width:18"></th>
<th><img src="photos/Chole.png" height="150" width="180"><br><input type="checkbox" name="chkb3" value="Chhole Masala">Chhole Masala<br>Price: 20 Quantity:<input type="text" name="qty3" style="height:19;width:18"></th>
<th><img src="photos/everest pav bhaji masala.jpg" height="150" width="180"><br><input type="checkbox" name="chkb4" value="Pav-Bhaji Masala">Pav-Bhaji Masala<br>Price: 15 Quantity:<input type="text" name="qty4" style="height:19;width:18"></th>
<th><img src="photos/everest-masala sabji.jpg" height="150" width="180"><br><input type="checkbox" name="chkb5" value="Sabji Masala">Sabji Masala<br>Price: 15 Quantity:<input type="text" name="qty5" style="height:19;width:18"></th>
</tr>
<tr style="background:#FEFFB8; font-size:20">
<th><img src="photos/Garam-masala.png" height="150" width="180"><br><input type="checkbox" name="chkb6" value="Garam Masala">Garam Masala<br>Price: 20 Quantity:<input type="text" name="qty6" style="height:19;width:18"></th>
<th><img src="photos/mdh_chanamasala.jpg" height="150" width="180"><br><input type="checkbox" name="chkb7" value="Chana Masala">Chana Masala<br>Price: 15 Quantity:<input type="text" name="qty7" style="height:19;width:18"></th>
<th><img src="photos/MDH-spices.jpg" height="150" width="180"><br><input type="checkbox" name="chkb8" value="Chat Masala">Chat Masala<br>Price: 20 Quantity:<input type="text" name="qty8" style="height:19;width:18"></th>
<th><img src="photos/sambar.jpg" height="150" width="180"><br><input type="checkbox" name="chkb9" value="Sambar Masala">Sambar Masala<br>Price: 20 Quantity:<input type="text" name="qty9" style="height:19;width:18"></th>
<th><img src="photos/palakpaneer.jpeg" height="150" width="180"><br><input type="checkbox" name="chkb10" value="Palakpaneer Masala">Palakpaneer Masala<br>Price: 10 Quantity:<input type="text" name="qty10" style="height:19;width:18"></th>
</tr>
</table>
</form>
</body>
</html>
