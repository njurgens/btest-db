<?php
	require('php/config.php');
	require('php/btdb-functions.php');
	
	$id = $_GET["id"];
	$type = $_GET["type"];
	
	if(empty($id) || empty($type)){
		echo "provided information incorrect";
		exit;
	}

	switch ($type)
	{
		case "raw_cell":
			$table = $RAW_CELL_DATA_TABLE;
			break;
		case "raw_pack":
			$table = $RAW_PACK_DATA_TABLE;
			break;
		default:
			echo "wrong file type";
			exit;
			break;
	}
	
	$con = dbconnect($SERVER, $USER, $PASSWD, $DB_NAME);
	// get cell profile data
	// get records
	$sql="SELECT filename, type, size, content FROM $table WHERE id='$id'";
	$result = mysql_query($sql);
	
	list($filename, $type, $size, $content) = mysql_fetch_array($result);
	header("Content-length: $size");
	header("Content-type: $type");
	header("Accept-Ranges: bytes"); 
	header("Content-Disposition: attachment; filename=$filename");
	header("Content-Transfer-Encoding: binary");
	echo $content;

	/*  
  $sql = "SELECT content, type, filename, size FROM db_raw_cell_data WHERE id='$id'";
	
  $result = @mysql_query($sql);
  $data = @mysql_result($result, 0, "content");
  $name = @mysql_result($result, 0, "filename");
  $size = @mysql_result($result, 0, "size");
  $type = @mysql_result($result, 0, "type");
	
  header("Content-type: $type");
  header("Content-length: $size");
  header("Content-Disposition: attachment; filename=$name");
  header("Content-Description: PHP Generated Data");
  echo $data;
 */
?>
