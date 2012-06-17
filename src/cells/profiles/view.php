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
	<tr>
		<td>Shape: </td><td><?php echo $data[0]["shape"] ?></td>
	</tr>
	<tr>
		<td>Casing: </td><td><?php echo $data[0]["casing"] ?></td>
	</tr>
	<tr>
		<th>Chemical Composition</th>
	</tr>
	<tr>
		<td>Cathode: </td><td><?php echo $data[0]["cathode"] ?></td>
	</tr>
	<tr>
		<td>Anode: </td><td><?php echo $data[0]["anode"] ?></td>
	</tr>
	<tr>
		<td>Electrolyte: </td><td><?php echo $data[0]["electrolyte"] ?></td>
	</tr>
	<tr>
		<td>Separator: </td><td><?php echo $data[0]["separator"] ?></td>
	</tr>
	<tr>
		<td>Mass: </td><td><?php echo $data[0]["mass"] ?> g</td>
	</tr>
	<tr>
		<td>Volume: </td><td><?php echo $data[0]["volume"] ?> mm<sup>3</sup></td>
	</tr>
	<tr>
		<th colspan=4>w/ Terminal</th>
	</tr>
	<tr>
		<td>Length: </td><td><?php echo $data[0]["length_with_terminals"] ?> mm</td>
		<td>Width: </td><td><?php echo $data[0]["width_with_terminals"] ?> mm</td>
	</tr>
	<tr>
		<td>Diameter: </td><td><?php echo $data[0]["diameter_with_terminals"] ?> mm</td>
		<td>Thickness: </td><td><?php echo $data[0]["thickness_with_terminals"] ?> mm</td>
	</tr>
	<tr>
		<th colspan=4>w/o Terminal</th>
	</tr>
	<tr>
		<td>Length: </td><td><?php echo $data[0]["length_without_terminals"] ?> mm</td>
		<td>Width: </td><td><?php echo $data[0]["width_without_terminals"] ?> mm</td>
	</tr>
	<tr>
		<td>Diameter: </td><td><?php echo $data[0]["diameter_without_terminals"] ?> mm</td>
		<td>Thickness: </td><td><?php echo $data[0]["thickness_without_terminals"] ?> mm</td>
	</tr>


</table>
<a href="#" onclick="self.close()">Close this Window</a>
