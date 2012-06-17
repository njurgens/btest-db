<!-- header data include javascript libraries and CSS -->
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>btest-db ALPHA</title>
		<link type="text/css" href="/css/redmond/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="/js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="/js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript" src="/js/btdb-functions.js"></script>
		<script type="text/javascript" src="/js/jquery.popupWindow.js"></script>
	</head>

<?php
	require('../../php/btdb-functions.php');
	require('../../php/config.php');
	$bcode = $_GET["bcode"];
	
	if(empty($name)){
		
	}
	
	$con = dbconnect($SERVER, $USER, $PASSWD, $DB_NAME);
	// get cell profile data
	$sql="SELECT * FROM $CELL_PROFILE_TABLE WHERE barcode='$bcode'";
	$result = mysql_query($sql);
	
	$data = readData($result);
	// get records
	$sql="SELECT * FROM $CELL_RECORDS_TABLE WHERE barcode='$bcode'";
	$result = mysql_query($sql);
	
	$records = readData($result);
	
	echo "ID No.: " . $data[0]["barcode"];

?>
<table>
	<tr>
		<td>Date Received: </td><td><?php echo $data[0]["service_date"] ?></td>
	</tr>
	<tr>
		<td>Manufacturer: </td><td><?php echo $data[0]["manufacturer"] ?></td>
	</tr>
	<tr>
		<td>Model: </td><td><?php echo $data[0]["model"] ?></td>
	</tr>
	<tr>
		<td>Supplier SN: </td><td><?php echo $data[0]["serial"] ?></td>
	</tr>
	<tr>
		<td>Nominal Capacity: </td><td><?php echo $data[0]["nominal_capacity"] ?> Ah</td>
	</tr>
	<tr>
		<td>Nominal Voltage: </td><td><?php echo $data[0]["nominal_voltage"] ?> V</td>
	</tr>
</table>

<?php
	$num = count($records);
	echo"<table border=1 id=\"users\" class=\"ui-widget ui-widget-content\">
				<thead>
					<tr>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Type</th>
						<th>Description</th>
						<th colspan=2><a href=\"/cells/profiles/new.php\" class=\"popup\">Register Cell</a></th>
					</tr>
				</thead>
				<tbody>
		";
	
	for($i = 0; $i < $num; $i++)
	{
		echo "<tr>";
		echo "<td>" . substr($records[$i]["start_date"],0,4) ."-".substr($records[$i]["start_date"],4,2) ."-".substr($records[$i]["start_date"],6,2) . "</td>";
		echo "<td>" . substr($records[$i]["end_date"],0,4) ."-".substr($records[$i]["end_date"],4,2) ."-".substr($records[$i]["end_date"],6,2) . "</td>";
		echo "<td>" . $records[$i]["action"] . "</td>";
		echo "<td>" . $records[$i]["description"] . "</td>";
		echo "<td><a href=\"/cells/records/viewtest.php?testid=".$records[$i]["id"]. "\" class=\"popup\">more info</a></td><td>edit</td>";
		echo "</tr>";
	}
	echo "</tbody></table>";

?>		
	<script type="text/javascript"> 
		$('.popup').popupWindow({ 
			height:700, 
			width:600
		}); 
	</script>
<a href="#" onclick="self.close()">Close this Window</a>
