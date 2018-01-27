<?php
$con=mysql_connect("localhost","root","") OR die("Cannot connect to the database because:".mysql_error());
$i = mysql_select_db("i_square_final",$con);
if(!$i)
{
	echo mysql_error();
}
//203.124.112.73
?>