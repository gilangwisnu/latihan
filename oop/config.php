<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "db_jajal";

$koneksi = mysql_connect($server, $root, $pass)
	or die("maaf terdapat masalah ! -->".mysql_error());
$bukadb = mysql_select_db("db_jajal")
	or die("Database yang dipilih tidak ada! --> ".mysql_error());

?>