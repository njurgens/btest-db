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
	$testid = $_GET["testid"];

	
	$con = dbconnect($SERVER, $USER, $PASSWD, $DB_NAME);
	// get cell profile data
	// get records
	$sql="SELECT * FROM $CELL_RECORDS_TABLE WHERE id='$testid'";
	$result = mysql_query($sql);
	
	$data = readData($result);
	
	$starttime = timeOfDay($data[0]["start_time"]);
	$endtime = timeOfDay($data[0]["end_time"]);
	$time = elapsedTime($data[0]["start_time"],$data[0]["end_time"]);
	echo "Test No. " . $data[0]["id"];
?>

<table>
	<tr>
		<td>Test Name </td><td><?php echo $data[0]["action"]; ?></td>
	</tr>
	<tr>
		<td>Test Engineer </td><td><?php echo $data[0]["engineer"]; ?></td>
	</tr>
	<tr>
		<td>Test Channel ID </td><td><?php echo $data[0]["channel"]; ?></td>
	</tr>
	<tr>
		<td>Start</td><td><?php echo date('Y-m-d g:i:s a',$data[0]["start_time"]) ?></td>
	</tr>
	<tr>
		<td>End</td><td><?php echo date('Y-m-d g:i:s a',$data[0]["end_time"]) ?></td>
	</tr>

	<tr>
		<td>Test Durration: </td>
		<td><?php echo $time["days"] . " days, " . $time["hours"] . " hours, " .  $time["minutes"] . " minutes, " . $time["seconds"] . " seconds"; ?></td>
	</tr>
	<tr>
		<td>Results: </td>
		<td><?php echo $data[0]["results_status"]; ?></td>
	</tr>
	<tr>
		<td>Comments: </td>
		<td><?php echo $data[0]["description"]; ?></td>
	</tr>

<?php
	if($data[0]["raw_data"])
	{	
		echo "<tr><td>Attached Data</td><td>";
		$con = dbconnect($SERVER, $USER, $PASSWD, $DB_NAME);
		$bcode = $data[0]["barcode"];
		$sql="SELECT * FROM $RAW_CELL_DATA_TABLE WHERE barcode='$bcode'";
		
		$result = mysql_query($sql);
		echo mysql_error();
		$raw_data = readData($result);
		$count = 0;
		foreach ($raw_data as $a)
		{
			$count++;
			echo "<a href=\"/data/cell/raw/" .  $a["filename"] . "\">raw data (" . $count . ")</a>";
		}
		echo "</td></tr>";
	}

?>
</table>
<br><br>
<a href="/upload.php?type=raw_cell&bcode=<?php echo $bcode; ?>&test=<?php echo $testid ?>">upload raw data</a> || <a href="#" onclick="self.close()">close this window</a>
