

<strong>Enter Employee Information</strong>

<?php
	if ( $_GET["status"] == "empty" )
	{
		echo "<br>Please complete all fields<br>";
	}
	if ( $_GET["status"] == "exists" )
	{
		echo "<br>User already exists!<br>";
	}
?>

<form action="/php/personnel/add.php" method="post">
	<table>
		<tr>
			<td>
				Name: 
			</td>
			<td>
				<input type="text" name="name" value="" /> <br>
			</td>
		</tr>
		<tr>
			<td>
				Department: 
			</td>
			<td>
				<input type="text" name="dept" value="" /> <br>
			</td>			
		</tr>
		<tr>
			<td>
				Email: 
			</td>
			<td>
				<input type="text" name="email" value="" /> <br>
			</td>
		</tr>
		<tr>
			<td>
				Phone: 
			</td>
			<td>
				<input type="text" name="phone" value="" /> <br>
			</td>			
		</tr>
	</table>
	<input type="submit" value="Add User">
</form>
