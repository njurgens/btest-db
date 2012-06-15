<?php
	include_once('functions.php');
?>

<strong>Enter Employee Information</strong>
<form action="/php/addperson.php" method="get">
	<table>
		<tr>
			<td>First Name:</td><td><input type="text" name="first" /></td>
		</tr>
		<tr>
			<td>Last Name:</td><td><input type="text" name="last" /></td>
		</tr>
		<tr>
			<td>Email:</td><td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td>Department:</td><td><input type="text" name="dept" /></td>
		</tr>
		<tr>
			<td>Phone:</td><td><input type="text" name="number" /></td>
		</tr>
	</table>
	<input type="submit" value="Generate Barcode" />
</form>


<?php


?>