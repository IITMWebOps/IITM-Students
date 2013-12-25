<?php

$host = "";
$username = "";
$password = "";
$db_name = "";

$tbl_name = "";

$con = mysql_connect("$host", "$username", "$password")or die("cannot connect to host"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>