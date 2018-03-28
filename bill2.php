<?php
mysql_select_db('test',mysql_connect('localhost','root',''))
  or die(mysql_error());
$query=mysql_query("select * from product where name='Patanjali Noodles';")

?>