<?php
	include_once("../php/functions.php");
	
	$str = $_GET["string"];
	$num = string2num($str);
	
	echo "string is: $str <br>";
	echo "number is: $num";

?>