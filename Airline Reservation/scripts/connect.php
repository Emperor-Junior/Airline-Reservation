<?php

$host = "localhost";
$user = "root";
$pass = "meha";
$name = "airlines_db";

mysql_connect("$host", "$user", "$pass") or die(mysql_error());
mysql_select_db("$name") or die(mysql_error());

?>