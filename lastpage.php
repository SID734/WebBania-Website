<html>
<head>
<script type="text/javascript" src="jquery.js">
function query(){
$("#aform").validate({
rules: {
fname: "required",
mname: "required",
lname: "required",
Email: {
required: true,
email: true
},
Contact: {
required: true,
maxlength: 10
},
agree: "required"
},

messages: {
fname: "Please enter your firstname.",
mname: "Please enter your middle name.",
lname: "Please enter your lastname.",
Contact: {
required: "Please provide a Contact No.",
minlength: "Your contact must be of 10 digits.",
maxlength: "Your contact must be of 10 digits.",
},
Email: "Please enter a valid email address.",
agree: "Please accept our policy."
}, 

submitHandler: function(form) {
form.submit();
}
});
}
</script>
</head>

<body style="background-color:lightyellow;">
&nbsp;&nbsp;&nbsp;
<font size="5%" color="red"><b><u><i>Shipping Details</i></u></b></font>
<br><br>
<font size="3%" color="orange"><b>*</b>Fill below fields appropriately.</font>
<br><br>
<form id="aform" action="#"  method="post">
<fieldset>
<h3><u>Name:</u></h3>
<table>
<tr><th>First name</th><th>Middle Name</th><th>Surname</th></tr>
<tr><td><input type="text" name="fname"></td><td><input type="text" name="mname"></td><td><input type="text" name="lname"></td></tr>
</table>
<h3><u>Address:</u></h3>
<textarea rows="3" cols="73">
</textarea>
<br><br>
<table>
<tr>
<td><h3><u>Contact No.</u></h3>
<input type="text" name="Contact">
</td>
<td>
<h3><u>E-mail Id:</u></h3>
<input type="text" name="Email">
</td>
</tr>
<tr><td><br><br>
<input type="submit" value="validate">
<button><a href="pay.html">Proceed to pay</a></button>
</td><td><br><br><input type="reset" value="Reset"></td></tr></table>
</fieldset>
</form><br><br>
<center><a href="D:\siddhesh\dwnld\New folder\WP Project\WebBania.html" target="Main">Home</a></center>
</body>
</html>