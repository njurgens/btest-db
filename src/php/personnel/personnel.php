<?php 
	require_once('../btdb-functions.php');
	require_once('../config.php');
	
	$con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	$sql="SELECT * FROM db_people";
	$result = mysql_query($sql);
	echo mysql_error();
    $data = readData($result);
	listPeople($data); 
?>
<?php
/******************************************************
* index.php
* main page; all other pages are called from here
* 
* author: Nicholas Jurgens [nicholas2010081@gmail.com]
* date: 16 June 2012
* 
*******************************************************/

?>
