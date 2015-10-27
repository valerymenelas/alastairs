<?php
$host="localhost";
$db="va634778";
$user="root";
$pass="root";
$conn=mysql_connect($host, $user, $pass);
mysql_select_db($db);
$query=mysql_query("select * from alastairsgroup_account");
?>