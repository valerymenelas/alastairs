<?php 
$rating_tableName     = 'ratings';
$rating_unitwidth     = 15;
$rating_dbname        = 'va634778_alastairs';
$units=5;
function connect(){
	$host="localhost";
 $uname="root";/*va634778*/
 $pass="root";/*49C13AD71D0943A9B0E44FD2D7CAA9D0*/
 $rating_dbname        = 'va634778_alastairs';

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


