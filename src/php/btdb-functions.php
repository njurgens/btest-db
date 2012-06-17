<?php
/******************************************************
* btdb-functions.php
* contains menu definitions to be added to index.php
* 
* author: Nicholas Jurgens [nicholas2010081@gmail.com]
* date: 16 June 2012
* 
*******************************************************/

function dbconnect($server, $user, $passwd, $db_name)
{ // connect to the database server
	$con = mysql_connect("$server", "$user", "$passwd");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("$db_name", $con);
	return $con;
}

function findType($bcode)
{ // detect type from scanned barcode
	$type = substr($bcode,0,1);
	echo "first char is: " . $type. "<br>";
	switch ($type) {
		case 0:
			echo "type is: person" . "<br>";
			return "person";
			break;
		case 1:
			echo "type is: cell" . "<br>";
			return "cell";
			break;
		case 2:
			echo "type is: equipment" . "<br>";
			return "equipment";
			break;
	}
	return;
}

function findTable($type, $PEOPLE_TABLE, $CELL_TABLE, $EQUIP_TABLE)
{ // provide correct table based on type
	switch ($type) {
		case "person":
			
			return "$PEOPLE_TABLE";
			break;
		case "cell":
			return "$CELL_TABLE";
			break;
		case "equipment":
			return "$EQUIP_TABLE";
			break;
	}
	return;
}

function readData($result)
{ // make the info from the database usable
	//echo "reading data <br>";
	$data = array();
	$count = 1;
	while($row = mysql_fetch_array($result))
	{
		//echo $count;
		$count += 1;
		//echo "pushing data <br>";
		array_push($data,$row);
	}
	return $data;
}

function content($data, $type)
{ // populates the page with content, currently not used
	switch ($type) {
		case "person":
			echo "content for person: <br>";
			echo "Name: " . $data[0]["name"] . "<br>";
			echo "GMID: " . $data[0]["gmid"] . "<br>";
			echo "code: " . $data[0]["barcode"] . "<br>";
			break;
		case "cell":
			return "$CELL_TABLE";
			break;
		case "equipment":
			return "$EQUIP_TABLE";
			break;
	}
	return;
}

function string2num($string)
{ // convers the characters in a string into their numerical ASCII values
	for($i = 0; $i != strlen($string); $i++)
	{	
			$asciiCode .= ord($string[$i]);
	}
	
	return $asciiCode;
}

function zeroPadding($string)
{ // pads a string with zeros to make is a specific length
	$padded = $string;
	for($i = strlen($string); $i < 10; $i++)
	{
		$padded .= "0";
	}
	
	return $padded;
}

function listPeople($data)
{ // lists all people in the database in table form
	$num = count($data);
	echo"<table border='1'>
			<tr><td>Name</td><td>Department</td><td>Email</td><td>Telephone</td></tr>
		";
	
	for($i = 0; $i < $num; $i++)
	{
		echo "<tr>";
		echo "<td>" . $data[$i]["name"] . "</td>";
		echo "<td>" . $data[$i]["department"] . "</td>";
		echo "<td>" . $data[$i]["email"] . "</td>";
		echo "<td>" . $data[$i]["phone"] . "</td>";
		echo "<td>
			<a href=\"/php/personnel/nick.php?email=blah\" class=\"popupPerson\">view</a> 
			<script type=\"text/javascript\"> 
				$('.popupPerson').popupWindow({ 
					centerScreen:1 
				}); 
			</script>
			</td><td>edit</td>";
		echo "</tr>";
	}
		echo "</table>";
	return;
}

function elapsedTime($start, $end)
{
	$elapsed = $end - $start;
	$days = floor($elapsed/(24*60*60));
	$hours = floor(($elapsed/(24*60*60)-$days)*24);
	$minutes = floor((($elapsed/(24*60*60)-$days)*24 - $hours)*60);
	$seconds = floor(((($elapsed/(24*60*60)-$days)*24 - $hours)*60 - $minutes)*60);
	
	return array("days" => $days, "hours" => $hours, "minutes" => $minutes, "seconds" => $seconds);
}
function timeOfDay($time)
{
	$days = floor($time/(24*60*60));
	$hours = floor(($time/(24*60*60)-$days)*24);
	$minutes = floor((($time/(24*60*60)-$days)*24 - $hours)*60);
	$seconds = floor(((($time/(24*60*60)-$days)*24 - $hours)*60 - $minutes)*60);
	
	return array("days" => $days,"hours" => $hours, "minutes" => $minutes, "seconds" => $seconds);
}
?>
     

     
     
     
     
     
        

