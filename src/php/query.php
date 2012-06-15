
<?php
    include_once("config.php");
    include_once("functions.php");
    
    $bcode=$_GET["bcode"];
    echo "barcode: " . $bcode . "<br>";
    
    $con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	
    $type = findType($bcode);
    $table = findTable($type, $PEOPLE_TABLE, $CELL_TABLE, $EQUIP_TABLE);
    echo "type is : " . $type . "<br>";
    echo "table is: " . $table . "<br>";
    $sql="SELECT * FROM $table WHERE barcode=$bcode";
    $result = mysql_query($sql);
	echo mysql_error();
    $data = readData($result);
    
    content($data,$type);

    mysql_close($con);
?> 
