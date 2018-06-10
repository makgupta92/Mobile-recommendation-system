<?php
	$host="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="mobiledata";
	
	$conn=mysqli_connect($host,$dbuser,$dbpass)or die("connection_error".mysql_errno());
	$dbsel=mysqli_select_db($conn,$dbname)or die("Db_not_selected".mysql_errno());
?>