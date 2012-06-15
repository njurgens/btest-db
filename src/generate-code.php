<html>
	Generate New Barcode (Person):
	<form action="barcode/nametocode.php" method="get">
		<input type="text" name="first" value="First" />
		<input type="text" name="last" value="Last" />
		<input type="submit" value="Generate Barcode" />
	</form>


	<form action="barcode/barcode.php" method="get">
		<input type="text" name="code" id="bcode" value="" />
		<input type="submit"/>
	</form>

</html>