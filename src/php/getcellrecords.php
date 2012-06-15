<?php
    include_once("config.php");
    include_once("functions.php");
    $bcode=$_GET["bcode"];
	if ($bcode == "all")
	{
		echo "Viewing all records";
	}
	else
	{
		 echo "Barcode: " . $bcode . "<br>";
	}
	
    $con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	$table = "db_cell_profile";
	if($bcode =='all')
	{
		$sql="SELECT * FROM $table";
	}
	elseif ((substr($bcode,0,1) == 1) && (strlen($bcode) == 13))
	{
		$sql="SELECT * FROM $table WHERE barcode='$bcode'";
	}
	else
	{
		$sql="SELECT * FROM $table WHERE serial='$bcode'";
	}
	
    $result = mysql_query($sql);
	echo mysql_error();
    $data = readData($result);
?>

<table border=1>
	<tr>
<?php
	if($bcode == "all")
	{
		echo "<td align='center'>Barcode</td>";
	}
?>
	
		<td align='center'>Date Received</td>
		<td align='center'>Manufacturer</td>
		<td align='center'>Model</td>
		<td align='center'>Supplier SN</td>
		<td align='center'>Nominal Voltage</td>
		<td align='center'>Nominal Capacity</td>
	</tr>
	
<?php
	$num = count($data);
	for($i = 0; $i < $num; $i++)
	{
		$date = $data[$i]['service_date'];
		$date = substr($date,0,4) . "-" . substr($date,4,2) . "-" . substr($date,6,2);
		

		
		echo "<tr>";
		if($bcode == "all")
		{
			echo "<td align='center'>" . $data[$i]['barcode'] . "</td>";
		}
		echo "<td align='center'>" . $date . "</td>";
		echo "<td align='center'>" . $data[$i]['manufacturer'] . "</td>";
		echo "<td align='center'>" . $data[$i]['model'] . "</td>";
		echo "<td align='center'>" . $data[$i]['serial'] . "</td>";
		echo "<td align='center'>" . $data[$i]['nominal_voltage'] . " V</td>";
		echo "<td align='center'>" . $data[$i]['nominal_capacity'] . " Ahr</td>";
		echo "</tr>";
		
	}
	
?>

</table>



<?php if($bcode != "all")
{
	echo "<br><br><table border=1>
			<tr>
				<td align='center'>Date</td>
				<td align='center'>Type</td>
				<td align='center'>Description</td>
			</tr> 
		";


	$bcode=$data[0]['barcode'];
	$table=db_cell_records;
	$sql="SELECT * FROM $table WHERE barcode='$bcode'";

    $result = mysql_query($sql);
	echo mysql_error();
    $data = readData($result);

	$num = count($data);
	for($i = $num - 1; $i >= 0; $i--)
	{
		$date = $data[$i]['date'];
		$date = substr($date,0,4) . "-" . substr($date,4,2) . "-" . substr($date,6,2);

		echo "<tr>";
		echo "<td align='center'>" . $date . "</td>";
		echo "<td align='center'>" . $data[$i]['action'] . "</td>";
		echo "<td align='center'>" . $data[$i]['description'] . "</td>";
		echo "<td align='center'>Details</td>";
		echo "</tr>";
		
	}

	echo "<table>";
}?>


