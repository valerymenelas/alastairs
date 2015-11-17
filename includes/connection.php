<?php
$host="sulley.cah.ucf.edu";
$db="va634778";
$user="va634778";
$pass="49C13AD71D0943A9B0E44FD2D7CAA9D0";
$conn=mysql_connect($host, $user, $pass);
mysql_select_db($db);
$query=mysql_query("select * from alastairs");
?>