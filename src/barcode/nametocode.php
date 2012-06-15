<?php
	include_once("/php/functions.php");
	
	$first = $_GET["first"];
	$last = $_GET["last"];
	//echo "first: $first <br>";
	//echo "last: $last <br>";
	$first = substr($first,0,1);
	$last = substr($last,0,1);

	$longcode = string2num($first);
	$longcode .=  string2num($last);
	$longcode .= substr(time(),3);
	$code = "0" . substr("$longcode",0,11);
	echo $code . "<br>";
	echo $longcode;
	
	//header("Location: barcode.php?code=$code");
	
?>