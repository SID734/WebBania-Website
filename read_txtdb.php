<?php
$myfile=fopen('products.txt','r');
echo
fread($myfile,filesize('products.txt'));
fclose($myfile);
?>