<?php
	include_once('functions.php');
	include_once('config.php');
	
	$con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	$sql="SELECT * FROM db_people";
	$result = mysql_query($sql);
	echo mysql_error();
    $data = readData($result);
	
	listPeople($data);
	
?>