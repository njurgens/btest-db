<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

<?php
	require('../../php/btdb-functions.php');
	require('../../php/config.php');
	$bcode = $_GET["bcode"];
	
	if(empty($name)){
		
	}
	
	$con = dbconnect($SERVER, $USER, $PASSWD, $DB_NAME);
	
	$sql="SELECT * FROM $CELL_PROFILE_TABLE WHERE barcode='$bcode'";
	$result = mysql_query($sql);
	
	$data = readData($result);
	
	echo "Barcode: " . $data[0]["barcode"];

?>
<table>
	<tr>
		<td>Last Check: </td><td><?php echo $data[0]["check_date"] ?></td>
	</tr>
	<tr>
		<td>Engineer: </td><td><?php echo $data[0]["check_engineer"] ?></td>
	</tr>
	<tr>
		<th>Voltage Check</th>
	</tr>
	<tr>
		<td>Take 1: </td><td><?php echo $data[0]["voltage_1"] ?> V</td>
	</tr>
	<tr>
		<td>Take 2: </td><td><?php echo $data[0]["voltage_2"] ?> V</td>
	</tr>
	<tr>
		<td>Take 3: </td><td><?php echo $data[0]["voltage_3"] ?> V</td>
	</tr>
	<tr>
		<td>Average</td><td><?php echo ($data[0]["voltage_1"] + $data[0]["voltage_2"] + $data[0]["voltage_3"])/3 ?> V</td>
	</tr>
	<tr>
		<th>Impedance Check</th>
	</tr>
	<tr>
		<td>Take 1: </td><td><?php echo $data[0]["resistance_1"] ?> mΩ</td>
	</tr>
	<tr>
		<td>Take 2: </td><td><?php echo $data[0]["resistance_2"] ?> mΩ</td>
	</tr>
	<tr>
		<td>Take 3: </td><td><?php echo $data[0]["resistance_3"] ?> mΩ</td>
	</tr>
	<tr>
		<td>Average</td><td><?php echo ($data[0]["resistance_1"] + $data[0]["resistance_2"] + $data[0]["resistance_3"])/3 ?> mΩ</td>
	</tr>
	


</table>
<a href="#" onclick="self.close()">Close this Window</a>


<?php
	

?>
