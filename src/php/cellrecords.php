<html> 
	<head>
        <script type="text/javascript" src="../js/functions.js"></script>
    </head>
	
	Input barcode or manufacturer serial number to access records: <br>
	<input type="text" onkeyup="queryCellRecords(this.value)"/>
	<input type="button" value="View All" onclick="queryCellRecords('all')"/>
		
	<br><br>
	<div id="cellrecords_sub"></div>

</html>
<?php
?>
