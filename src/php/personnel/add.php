<?php
	require('../btdb-functions.php');
	require('../config.php');
?>

<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$dept=$_POST["dept"];
	$phone=$_POST["phone"];
	
	if(empty($name) || empty($email) || empty($dept) || empty($phone))
	{
		header("Location: /php/personnel/new.php?status=empty");
	}
	
	$con = dbconnect($SERVER, $USER, $PASSWD, $DB_NAME);
	
	$sql="SELECT * FROM $PEOPLE_TABLE WHERE email='$email'";
	$result = mysql_query($sql);
	echo mysql_error();
	
	if($row = mysql_fetch_array($result))
	{
		header("Location: /php/personnel/new.php?status=exists");
	}
	else
	{
		$sql="INSERT INTO $PEOPLE_TABLE (name, email, department, phone)
				VALUES ('$name', '$email', '$dept', '$phone')";
		mysql_query($sql);
		echo mysql_error();
	}	
	
?>

<center>
	<strong>Success!</strong><br>
	redirecting...
</center>

<?php
	
?>

