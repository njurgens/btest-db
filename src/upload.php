<?php
	$type = $_GET["type"];
	$test = $_GET["test"];
	switch($type)
	{
		case "raw_cell":
			$str = "Raw Cell";
			break;
		case "raw_pack":
			$str = "Raw Pack";
			break;		
	}
	
	echo "Uploading " . $str . " Data";
	
?>
<br><br>
<form method="POST" enctype="multipart/form-data">
	<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
		<tr> 
			<td width="246">
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
				<input type="hidden" name="test" value=<?php echo $_GET["test"]; ?> >
				<input type="hidden" name="bcode" value=<?php echo $_GET["bcode"];?> >
				<input type="hidden" name="type" value=<?php echo $_GET["type"]; ?> >
				<input name="file" type="file" id="file"> 
			</td>
			<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
		</tr>
	</table>
</form>



<?php
	require('php/btdb-functions.php');
	require('php/config.php');
	if(!isset($_POST['upload']) || !($_FILES['file']['size'] > 0))
	{
		echo "No file";
		exit;
	} 
	
	$type = $_POST["type"];
	echo "Type: " . $type . "<br>";
	echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	echo "Type: " . $_FILES["file"]["type"] . "<br />";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		
	switch($type)
	{
		case "raw_cell":
			$path = "data/cell/raw/";
			break;
		case "raw_pack":
			$path = "data/pack/raw/";
			break;
		default:
			$path = "data/";
			break;
	}

	if (file_exists("$path" . $_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"] . " already exists. ";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"],
		"$path" . $_FILES["file"]["name"]);
		echo "Stored in: " . "$path" . $_FILES["file"]["name"];
		switch($type)
		{
			case "raw_cell":
				$where = "/cells/records/viewtest.php?testid=" . $test;
				header("Location: $where");
				exit;
				break;
			case "raw_pack":
				$where = "/packs/records/viewtest.php?testid=" . $test;
				header("Location: $where");
				exit;
				break;		
		}
	}

?>
