<?php
if(!mysql_connect("localhost","va634778","49C13AD71D0943A9B0E44FD2D7CAA9D0"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("va634778"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>