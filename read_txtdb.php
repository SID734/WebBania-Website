<!DOCTYPE html>
<html>
<body>

<div id="demo">
<button type="button" onclick="loadDoc()">See Order Details:</button>
</div>
<br>
<br>
<button onclick="clearOrders()">Clear the Shoppping Cart</button>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "products.txt", true);
  xhttp.send();
}

function clearOrders() {
	var xhttp2 =  new XMLHttpRequest();
	xhttp2.onreadystatechange=function() {
		if(this.readyState ==4 && this.status == 200){
			document.getElementById("demo").innerHTML =
			this.responseText;
		}
	};
	xhttp2.open("GET","empty.txt",true);
	xhttp2.send();
}
</script>

</body>
</html>
