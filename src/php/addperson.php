<?php
	include_once("config.php");
	include_once("functions.php");
	
	$first = $_GET["first"];
	$last = $_GET["last"];
	$dept = $_GET["dept"];
	$number = $_GET["number"];
	$email = $_GET["email"];
	$fullname = $first . " " . $last;
	
	echo "$first $last $dept $number $email";
	
	$con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	$sql="SELECT * FROM db_people WHERE email='$email'";
	$result = mysql_query($sql);
	echo mysql_error();
	
	$data = readData($result);
	$num = count($data);
	
	if($num != 0)
	{
		header("Location: /index.php");
	}
	
	$sql="INSERT INTO db_people (name, department, phone, email)
			VALUES ('$fullname', '$dept', '$number', '$email')";
	mysql_query($sql);
	echo mysql_error();
	
	$first = substr($first,0,1);
	$last = substr($last,0,1);

	$longcode = string2num($first);
	$longcode .=  string2num($last);
	$longcode .= substr(time(),3);
	$code = "0" . substr("$longcode",0,11);
	//echo $code . "<br>";
	//echo $longcode	;
	
	header("Location: ../barcode/barcode.php?code=$code&email=$email");
?>
