<?php
	include_once('btdb-functions.php');
	include_once('config.php');
	
	$con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	$sql="SELECT * FROM '$PEOPLE_TABLE'";
	$result = mysql_query($sql);
	echo mysql_error();
    $data = readData($result);
	
	listPeople($data);
	
?>
